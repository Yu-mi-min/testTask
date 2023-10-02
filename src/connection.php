<?php
function connectToDB(): PDO
{
    static $connection = null;
    if (null !== $connection) {
        return $connection;
    }
    $config = loadConfig('database');

    $connection = new PDO(
        "mysql:host={$config['hostname']};dbname={$config['database']}",
        $config['username'],
        $config['password']
    );
    return $connection;
}
