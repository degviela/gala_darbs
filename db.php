<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'gramatas_izstrade';
    private $connection;

    public function __construct($host = null, $username = null, $password = null, $database = null) {
        $this->host = $host ?? $this->host;
        $this->username = $username ?? $this->username;
        $this->password = $password ?? $this->password;
        $this->database = $database ?? $this->database;

        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function insertEntry($name, $email, $message) {

        $sql = "INSERT INTO zinojums (vards, epasts, zinojums) VALUES (?, ?, ?)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $message);

        return $stmt->execute();
    }

    public function selectAllEntries() {
        $sql = "SELECT vards, epasts, zinojums FROM zinojums";
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function close() {
        $this->connection->close();
    }
}
?>
