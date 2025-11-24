<?php
namespace App\Service;
use App\Entity\AuditTrailLog;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use DateTimeZone;

class AuditLog
{
    private $tokenStorage;
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager    = $entityManager;
    }

    public function addAuditLog($request, $apiResponse, $apiurl, $action){
        //set datetime
        $currentDateTime = new DateTimeImmutable('now', new DateTimeZone('Asia/Manila')); // Current date and time
        $ipaddress = $request->getClientIP();
        $token = $this->tokenStorage->getToken();
        $user = "";
        // Check if a token exists and if it's authenticated
        if ($token !== null && $token->getUser() !== 'anon.') {
            // Extract user data from the token payload
            $user = $token->getUser();
        }
        $transaction = [
            'api_url' => $apiurl,
            'action' => $action,
            'client_request' => $request->getContent(),
            'api_response' => $apiResponse,
        ];
        $newLog = new AuditTrailLog();
        $newLog->setUser($user);
        $newLog->setIpAddress($ipaddress);
        $newLog->setTransactions(json_encode($transaction, JSON_UNESCAPED_SLASHES));
        $newLog->setDatetime($currentDateTime);
        $this->entityManager->persist($newLog);
        $this->entityManager->flush();
    }
}