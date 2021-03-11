<?php

namespace App\Database;

class DB extends \PDO implements DBInterface
{

    public function __construct($dsn, $username, $passwd, array $options)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    public function query(): array
    {
        // TODO: Implement query() method.
    }

}