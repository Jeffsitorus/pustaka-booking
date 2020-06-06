<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Data Anggota Perpustakaan Online</title>
  <style>
    h3 {
      text-align: center;
    }

    .table-buku {
      width: 100%;
      border-collapse: collapse;
    }

    .table-buku tr th,
    .table-buku tr td {
      border: 1px solid #000;
      font-size: 11pt;
      font-family: 'Verdana', sans-serif;
      padding: 10px;
    }
  </style>
</head><body>
  <h3>Laporan Data Anggota Perpustakaan Online</h3>
  <table class="table-buku">
    <tr>
      <th>No</th>
      <th>Nama Anggota</th>
      <th>Email</th>
      <th>Member Sejak</th>
      <th>Alamat</th>
      <th>Status</th>
    </tr>
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
  </table>
</body></html>