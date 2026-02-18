<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku - Perpustakaan MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h4>Edit Buku</h4>
                    </div>
                    <div class="card-body">

                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>

                        <form action="index.php?action=update&id=<?= $buku['id'] ?>" method="POST">
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="<?= htmlspecialchars($buku['judul']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="penulis" name="penulis"
                                    value="<?= htmlspecialchars($buku['penulis']) ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit"
                                    value="<?= htmlspecialchars($buku['penerbit']) ?>">
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit"
                                        min="1900" max="2099" value="<?= $buku['tahun_terbit'] ?>">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" id="stok" name="stok"
                                        min="0" value="<?= $buku['stok'] ?>">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="index.php?action=index" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>