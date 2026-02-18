<!-- Header Title -->
<div class="header-title">
    <i class="bi bi-book"></i>
    <h1>Daftar Buku Perpustakaan</h1>
</div>

<!-- Tombol Tambah -->
<div style="margin-bottom: 2rem;">
    <a href="index.php?action=create" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i>
        Tambah Buku Baru
    </a>
</div>

<!-- Table Container -->
<div class="table-container">
    <div class="table-responsive">
        <table>
            <thead>
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
                <?php if (empty($buku)): ?>
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 3rem;">
                            <i class="bi bi-emoji-frown" style="font-size: 3rem; color: var(--gray);"></i>
                            <p style="color: var(--gray); margin-top: 1rem;">Belum ada data buku</p>
                        </td>
                    </tr>
                <?php else: ?>
                    <?php $no = 1; ?>
                    <?php foreach ($buku as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><strong><?= htmlspecialchars($row['judul']) ?></strong></td>
                            <td><?= htmlspecialchars($row['penulis']) ?></td>
                            <td><?= htmlspecialchars($row['penerbit']) ?></td>
                            <td><?= $row['tahun_terbit'] ?></td>
                            <td>
                                <span class="badge <?= $row['stok'] > 0 ? 'badge-success' : 'badge-danger' ?>">
                                    <i class="bi <?= $row['stok'] > 0 ? 'bi-check-circle' : 'bi-exclamation-circle' ?>"></i>
                                    <?= $row['stok'] ?> Tersedia
                                </span>
                            </td>
                            <td>
                                <div style="display: flex; gap: 0.5rem;">
                                    <a href="#" class="btn btn-sm btn-info" title="Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="index.php?action=edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-warning" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Info Footer Table -->
    <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid rgba(0,0,0,0.05);">
        <p style="color: var(--secondary); display: flex; align-items: center; gap: 0.5rem;">
            <i class="bi bi-database"></i>
            Total Buku: <strong><?= count($buku) ?></strong> item
        </p>
    </div>
</div>