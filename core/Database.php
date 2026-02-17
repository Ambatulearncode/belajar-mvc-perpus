<?php
namespace Core;

use PDO;
use PDOException;

class Database
{
    private string $host;
    private string $dbname;
    private string $username;
    private string $password;
    private ?PDO $pdo = null;


    public function __construct()
    {
        $this->loadEnv();
        $this->validateConfig();
        $this->connect();
        
    }

    public function getConnection(): ?PDO
    {
        return $this->pdo;
    }

    private function loadEnv(): void
    {
        $envFile = __DIR__ . '/../.env';
        if(file_exists($envFile)) {
            $env = parse_ini_file($envFile);
            $this->host = $env['DB_HOST'] ?? 'localhost';
            $this->dbname = $env['DB_NAME'] ?? 'perpustakaan';
            $this->username = $env['DB_USER'] ?? 'root';
            $this->password = $env['DB_PASS'] ?? '';
        } else {
            $this->host = 'localhost';
            $this->dbname = 'perpustakaan';
            $this->username = 'root';
            $this->password = '';
        }
    }

    private function validateConfig(): void
    {
        if(empty($this->host) || empty($this->dbname) || empty($this->username)) {
            throw new PDOException('Database configuration is not set correctly.');
        }
    }

    private function connect(): void
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Database connection error: " . $e->getMessage());
            throw new PDOException("Failed to connect to the database.");
        }
    }
}