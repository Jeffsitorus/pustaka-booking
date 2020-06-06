<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?= site_url('laporan/cetak_laporan_buku') ?>" class="btn btn-primary">
                <i class="fas fa-print"></i> Print
            </a>
            <a href="<?= site_url('laporan/laporan_buku_pdf') ?>" class="btn btn-success">
                <i class="fas fa-download"></i> Download Pdf
            </a>
            <a href="<?= site_url('laporan/export_excel') ?>" class="btn btn-warning">
                <i class="fas fa-file-excel"></i> Export to Excel
            </a>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul Buku</th>
                                    <th scope="col">Pengarang</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tahun Terbit</th>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($buku as $key => $bk) : ?>
                                    <tr>
                                        <td scope="row"><?= $key + 1; ?></td>
                                        <td scope="row"><?= $bk['judul_buku'] ?></td>
                                        <td scope="row"><?= $bk['pengarang'] ?></td>
                                        <td scope="row"><?= $bk['penerbit'] ?></td>
                                        <td scope="row"><?= $bk['tahun_terbit'] ?></td>
                                        <td scope="row"><?= $bk['isbn'] ?></td>
                                        <td scope="row"><?= $bk['stok'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>