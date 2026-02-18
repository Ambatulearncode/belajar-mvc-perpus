<?php

namespace App\Controllers;

use App\Models\BukuModel;
use Core\Controller;

class BukuController extends Controller
{
    private BukuModel $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $buku = $this->bukuModel->getAllBuku();
        $this->view('buku/index', ['buku' => $buku]);
    }

    public function edit($id)
    {
        $buku = $this->bukuModel->getBukuById($id);
        if ($buku) {
            $this->view('buku/edit', ['buku' => $buku]);
        } else {
            header('Location: index.php?action=index');
            exit();
        }
    }

    public function update($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'judul' => $_POST['judul'] ?? '',
                'penulis' => $_POST['penulis'] ?? '',
                'penerbit' => $_POST['penerbit'] ?? '',
                'tahun_terbit' => $_POST['tahun_terbit'] ?? null,
                'stok' => $_POST['stok'] ?? 0,
            ];

            if (!empty($data['judul']) && !empty($data['penulis'])) {
                $this->bukuModel->update($id, $data);
                header('Location: index.php?action=index');
                exit();
            } else {
                $buku = $this->bukuModel->getBukuById($id);
                $this->view('buku/edit', ['buku' => $buku, 'error' => 'Judul dan Penulis harus diisi']);
            }
        }
    }

    public function create()
    {
        $this->view('buku/create');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'judul' => $_POST['judul'] ?? '',
                'penulis' => $_POST['penulis'] ?? '',
                'penerbit' => $_POST['penerbit'] ?? '',
                'tahun_terbit' => $_POST['tahun_terbit'] ?? null,
                'stok' => $_POST['stok'] ?? 0,
            ];

            if (!empty($data['judul']) && !empty($data['penulis'])) {
                $this->bukuModel->create($data);
                header('Location: index.php?action=index');
                exit();
            }
        }
    }
}
