<?php

interface ConnectionInterface
{
    public function connect();
}

class DbConnection implements ConnectionInterface
{
    public function connect()
    {
        // TODO: Implement connect() method.
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}