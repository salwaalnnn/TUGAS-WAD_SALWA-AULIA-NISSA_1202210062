<?php
/*CREATE TABLE daftarmv (
    no int PRIMARY KEY AUTO_INCREMENT,
    namapenyanyi varchar(10),
    judulmv varchar(50),
    gambar varchar(50),
    tahun int,
    jumlahtonton int
);*/

$conn = mysqli_connect("localhost:3306","root","","tugas3wad_daftarmv");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $namapenyanyi = $data['namapenyanyi'];
    $judulmv = $data['judulmv'];
    $gambarmv = $data['gambarmv'];
    $tahunrilis = $data['tahunrilis'];
    $jumlahtonton = $data['jumlahtonton'];

    $query = "INSERT INTO daftarmv
        VALUES
        ('','$namapenyanyi','$judulmv','$gambarmv','$tahunrilis','$jumlahtonton')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn, "DELETE FROM daftarmv WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $namapenyanyi = $data['namapenyanyi'];
    $judulmv = $data['judulmv'];
    $gambarmv = $data['gambarmv'];
    $tahunrilis = $data['tahunrilis'];
    $jumlahtonton = $data['jumlahtonton'];

    $query = "UPDATE daftarmv SET
        namapenyanyi = '$namapenyanyi',
        judulmv = '$judulmv',
        gambarmv = '$gambarmv',
        tahunrilis = '$tahunrilis',
        jumlahtonton = '$jumlahtonton'
        WHERE no = $no
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>