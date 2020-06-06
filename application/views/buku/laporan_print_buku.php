<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Buku Perpustakaan Online</title>
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
</head>

<body>
    <h3>Laporan Data Buku Perpustakaan Online</h3>
    <table class="table-buku">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>ISBN</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($buku as $key => $bk) : ?>
            <tr>
                <td><?= $key + 1; ?></td>
                <td><?= $bk['judul_buku'] ?></td>
                <td><?= $bk['pengarang'] ?></td>
                <td><?= $bk['penerbit'] ?></td>
                <td><?= $bk['tahun_terbit'] ?></td>
                <td><?= $bk['isbn'] ?></td>
                <td><?= $bk['stok'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>