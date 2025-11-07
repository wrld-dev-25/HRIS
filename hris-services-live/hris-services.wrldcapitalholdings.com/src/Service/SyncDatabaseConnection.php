<?php

namespace App\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Configuration;
use Doctrine\Common\EventManager;

class SyncDatabaseConnection extends Connection
{
    public function __construct(array $params, Driver $driver, Configuration $config, EventManager $eventManager)
    {
        // First, let symfony connect to the default database from env so that a Connection instance appears in order to execute a SQL query to get the necessary data
        parent::__construct($params, $driver, $config, $eventManager);

        // Getting data and changing it
        $userDatabase = $this->fetchSyncDatabase(); // Replace 1 with dynamic user ID if needed
        $params['dbname'] = $userDatabase['dbname'];
        $params['user'] = $userDatabase['user'];
        $params['password'] = $userDatabase['password'];

        // Reconnect with the new parameters
        parent::__construct($params, $driver, $config, $eventManager);
    }

    private function fetchSyncDatabase()
    {
        return $this->executeQuery('SELECT * FROM sync_connection')->fetchAssociative();
    }
}
