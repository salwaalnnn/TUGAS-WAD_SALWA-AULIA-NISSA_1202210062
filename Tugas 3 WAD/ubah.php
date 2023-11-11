<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM daftarmv WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Tidak ada data yang diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Video Musik</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4e7d7;
            margin: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #a1bbd0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-right: 50px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #351f39;
        }
    </style>
    </head>
    <body>
        <h1>Ubah Data Video Musik</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="namapenyanyi">Nama Penyanyi</label>
                    <input type="text" name="namapenyanyi" id="namapenyanyi" required value = <?= $brg["namapenyanyi"];?>>
                </li>
                <li>
                    <label for="judulmv">Judul Musik Video</label>
                    <input type="text" name="judulmv" id="judulmv" required value = <?= $brg["judulmv"];?>>
                </li>
                <li>
                    <label for="gambarbarang">Gambar Barang</label>
                    <input type="text" name="gambarmv" id="gambarmv" required value = <?= $brg["gambarmv"];?>>
                </li>
                <li>
                    <label for="tahunrilis">Tahun Rilis</label>
                    <input type="text" name="tahunrilis" id="tahunrilis" required value = <?= $brg["tahunrilis"];?>>
                </li>
                <li>
                    <label for="jumlahtonton">Jumlah Views</label>
                    <input type="text" name="jumlahtonton" id="jumlahtonton" required value = <?= $brg["jumlahtonton"];?>>
                </li>
                    <button type="submit" name="submit">Ubah Data</button>
            </ul>
        </form>
    </body>
</html>