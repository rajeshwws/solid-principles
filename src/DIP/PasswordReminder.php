<?php

namespace App\DIP;


class PasswordReminder
{
    /**
     * @var ConnectionInterface
     */
    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}