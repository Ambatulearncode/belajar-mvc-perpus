<?php
namespace App\Controllers;

use App\Models\BukuModel;

class BukuController
{
    private BukuModel $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $buku = $this->bukuModel->getAllBuku();
        include_once __DIR__ . '/../views/buku/index.php';
    }
}