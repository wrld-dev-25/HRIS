<?php
// src/Utility/SessionManager.php
namespace App\Utility;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionManager
{
    private $sessionStoragePath;

    public function __construct(string $sessionStoragePath)
    {
        $this->sessionStoragePath = $sessionStoragePath;
    }

    public function invalidateSessionsByUserType(string $userTypeCode): void
    {
        $sessionFiles = glob($this->sessionStoragePath . '/*');

        foreach ($sessionFiles as $sessionFile) {
            // Read the session file content securely
            $sessionData = @file_get_contents($sessionFile);

            if ($sessionData !== false && strpos($sessionData, $userTypeCode) !== false) {
                @unlink($sessionFile);  // Delete the session file if the user type code matches
            }
        }
    }
}

