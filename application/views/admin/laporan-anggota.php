<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <a href="<?= site_url('laporan/laporan_anggota_pdf') ?>" class="btn btn-success">
        <i class="fas fa-download"></i> Download Pdf
      </a>
      <div class="card mt-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped mt-3">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Anggota</th>
                  <th scope="col">Email</th>
                  <th scope="col">Member Sejak</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($anggota as $key => $agt) : ?>
                  <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $agt['nama'] ?></td>
                    <td><?= $agt['email'] ?></td>
                    <td><?= date('Y-m-d', $agt['tanggal_input']) ?></td>
                    <td><?= $agt['alamat'] ?></td>
                    <td>
                      <?php if ($agt['is_active'] == "1") : ?>
                        <span>Aktif</span>
                      <?php else : ?>
                        <span>Tidak Aktif</span>
                      <?php endif; ?>
                    </td>
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