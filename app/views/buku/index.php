<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku - Perpustakaan MVC</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome untuk icon (opsional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .table-container {
            margin-top: 30px;
        }
        .header-title {
            margin: 30px 0 20px 0;
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .btn-add {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        
        <!-- Header -->
        <div class="row">
            <div class="col-12">
                <h1 class="header-title">
                    <i class="fas fa-book me-2"></i>
                    Daftar Buku Perpustakaan
                </h1>
            </div>
        </div>
        
        <!-- Tombol Tambah Buku (akan aktif nanti) -->
        <div class="row btn-add">
            <div class="col-12">
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Tambah Buku
                </a>
            </div>
        </div>
        
        <!-- Tabel Daftar Buku -->
        <div class="row">
            <div class="col-12 table-container">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php 
    // TODO: Loop data $buku dari controller
    $no = 1;
    foreach ($buku as $row):
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($row['judul']) ?></td>
        <td><?= htmlspecialchars($row['penulis']) ?></td>
        <td><?= htmlspecialchars($row['penerbit']) ?></td>
        <td><?= $row['tahun_terbit'] ?></td>
        <td>
            <span class="badge <?= $row['stok'] > 0 ? 'bg-success' : 'bg-danger' ?>">
                <?= $row['stok'] ?>
            </span>
        </td>
        <td>
            <a href="#" class="btn btn-sm btn-info" title="Detail">
                <i class="fas fa-eye"></i>
            </a>
            <a href="#" class="btn btn-sm btn-warning" title="Edit">
                <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="btn btn-sm btn-danger" title="Hapus">
                <i class="fas fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Info Footer -->
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-muted">
                    <i class="fas fa-database me-1"></i>
                    Total Buku: <span class="fw-bold"><?= isset($buku) ? count($buku) : 0 ?></span>
                </p>
            </div>
        </div>
        
    </div>
    
    <!-- Bootstrap JS (optional, untuk interaktivitas nanti) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>