<?php
require 'function.php';
$barang = query("SELECT * FROM daftarmv")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Salwa Aulia Nissa</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4e7d7; /* Warna background */
            color: #333; /* Warna teks */
            margin: 20px;
        }

        h1 {
            color: #333; /* Warna judul */
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #a1bbd0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #333;
        }

        th {
            background-color: #351f39; 
            color: white;
        }

        tr:hover {
            background-color: #2a93d5;
        }

        a {
            text-decoration: none;
            padding: 8px 16px;
            background-color: #efaa52;
            color: black; 
            border-radius: 4px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
        <h1>Daftar Video Musik Terpopuler</h1>

        <a href="tambah.php">Tambah Data Video Musik</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="10">
            <tr>
                <th>No. </th>
                <th>Pilihan</th>
                <th>Gambar</th>
                <th>Nama Penyanyi</th>
                <th>Judul Video Musik</th>
                <th>Tahun Rilis</th>
                <th>Jumlah Views</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a> /
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah kamu yakin untuk menghapus data ini?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambarmv']; ?>" width="200"></td>
                <td><?= $row["namapenyanyi"]; ?></td>
                <td><?= $row["judulmv"]; ?></td>
                <td><?= $row["tahunrilis"]; ?></td>
                <td><?= $row["jumlahtonton"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>