<?php
namespace App\Models;

use Core\Database;
use PDO;

class BukuModel
{
    private PDO $db;

    public function __construct()
    {
        $this->connectDb();
    } 

    private function connectDb(): void
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllBuku(): array
    {
        $query = "SELECT * FROM buku";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getBukuById(int $id): ?array
    {
        $query = "SELECT * FROM buku WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}