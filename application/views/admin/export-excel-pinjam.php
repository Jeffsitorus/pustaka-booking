<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma:no-cache");
header("Expires:0");
?>

<h3>
  <Center>Laporan Data Pinjam Buku Perpustakan Online</Center>
</h3>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama Anggota</th>
    <th>Judul Buku</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Tanggal Pengembalian</th>
    <th>Total Denda</th>
    <th>Status</th>
  </tr>
  <?php foreach ($laporan as $key => $lp) : ?>
    <tr>
      <td><?= $key + 1; ?></td>
      <td><?= $lp['nama']; ?></td>
      <td><?= $lp['judul_buku'] ?></td>
      <td><?= $lp['tgl_pinjam'] ?></td>
      <td><?= $lp['tgl_kembali'] ?></td>
      <td><?= $lp['tgl_pengembalian'] ?></td>
      <td><?= $lp['total_denda'] ?></td>
      <td><?= $lp['status'] ?></td>
    </tr>
  <?php endforeach; ?>
</table>