<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Perpustakaan MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Tambah Buku Baru</h4>
                    </div>
                    <div class="card-body">
                        <form action="index.php?action=store" method="POST">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul" required>
                            </div>

                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis" required>
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" min="1900" max="2099">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok" min="0" value="1">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="index.php" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>