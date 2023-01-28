<?php
class Database
{
    public $connection;
    public function __construct(array $config, string $username = 'root', string $password = 'IamUnicorn13?')
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }


    public function query(string $query, array $params = [])
    {
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;

    }
}