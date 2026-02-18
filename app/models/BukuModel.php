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

    public function create(array $data)
    {
        $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, stok) VALUES (:judul, :penulis, :penerbit, :tahun_terbit, :stok)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':judul', $data['judul']);
        $stmt->bindParam(':penulis', $data['penulis']);
        $stmt->bindParam(':penerbit', $data['penerbit']);
        $stmt->bindParam(':tahun_terbit', $data['tahun_terbit']);
        $stmt->bindParam(':stok', $data['stok']);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM buku WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function update(int $id, array $data)
    {
        $query = "UPDATE buku SET judul = :judul, penulis = :penulis, penerbit = :penerbit, tahun_terbit = :tahun_terbit, stok = :stok WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':judul', $data['judul']);
        $stmt->bindParam(':penulis', $data['penulis']);
        $stmt->bindParam(':penerbit', $data['penerbit']);
        $stmt->bindParam(':tahun_terbit', $data['tahun_terbit']);
        $stmt->bindParam(':stok', $data['stok']);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }
}
