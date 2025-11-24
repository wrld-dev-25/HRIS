<?php
// src/EventListener/JWTDecodedListener.php

namespace App\Service;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTDecodedEvent;

class JWTDecodedListener
{
    public function onJWTDecoded(JWTDecodedEvent $event)
    {
        $payload = $event->getPayload();

        // Check if at least one identifier is present
        if (!isset($payload['username']) && !isset($payload['email']) && !isset($payload['contact_no'])) {
            $event->markAsInvalid();
        }
    }
}
