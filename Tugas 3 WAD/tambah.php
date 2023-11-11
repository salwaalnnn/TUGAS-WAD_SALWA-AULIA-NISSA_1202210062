<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data belum berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Video Musik</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4e7d7;
            margin: 20px;
            padding: 0;
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
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
        <h1>Tambah Data Video Musik</h1>
        <br> <br><br>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="namapenyanyi">Nama Penyanyi</label>
                    <input type="text" name="namapenyanyi" id="namapenyanyi">
                </li>
                <li>
                    <label for="judulmv">Judul Musik Video</label>
                    <input type="text" name="judulmv" id="judulmv">
                </li>
                <li>
                    <label for="tahunrilis">Tahun Rilis</label>
                    <input type="text" name="tahunrilis" id="tahunrilis">
                </li>
                <li>
                    <label for="jumlahtonton">Jumlah Views</label>
                    <input type="text" name="jumlahtonton" id="jumlahtonton">
                </li>
                <li>
                    <label for="gambarmv">Gambar Music Video</label>
                    <input type="text" name="gambarmv" id="gambarmv">
                </li>
                    <button type="submit" name="submit">Tambah Data</button>
            
            </ul>
        </form>
    </body>
</html>