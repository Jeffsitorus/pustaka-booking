<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition:attachment; filename=$title.xls");
header("Pragma:no-cache");
header("Expires:0");
?>

<h3>
  <Center>Laporan Data Buku Perpustakan Online</Center>
</h3>
<table border="1">
  <tr>
    <th>No</th>
    <th>Judul Buku</th>
    <th>Pengarang</th>
    <th>Penerbit</th>
    <th>Tahun Penerbit</th>
    <th>ISBN</th>
    <th>Stok</th>
  </tr>
  <?php foreach ($buku as $key => $bk) : ?>
    <tr>
      <td><?= $key + 1; ?></td>
      <td><?= $bk['judul_buku']; ?></td>
      <td><?= $bk['pengarang']; ?></td>
      <td><?= $bk['penerbit']; ?></td>
      <td><?= $bk['tahun_terbit']; ?></td>
      <td><?= $bk['isbn']; ?></td>
      <td><?= $bk['stok']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>