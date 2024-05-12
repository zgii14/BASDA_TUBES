<?php $link= mysqli_connect("localhost","root","");
    mysqli_select_db($link,"inventaris_lrsoft");
    ?>

    <?php
function query($query) {
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data) {
    global $link;
    $kode_barang = $data["kode_barang"];
    $kategori = mysqli_real_escape_string($link, $data["kategori"]);
    $nama_barang = mysqli_real_escape_string($link, $data["nama_barang"]);
    $jumlah_barang = $data["jumlah_barang"];
    $sinopsis = mysqli_real_escape_string($link, $data["sinopsis"]);
    $gambar_barang = mysqli_real_escape_string($link, $data["gambar_barang"]);

    //query update data
    $query = "UPDATE tambah_barang SET kategori = '$kategori', nama_barang = '$nama_barang', jumlah_barang = $jumlah_barang, sinopsis = '$sinopsis', gambar_barang = '$gambar_barang' WHERE kode_barang = $kode_barang";
    mysqli_query($link, $query);

    return mysqli_affected_rows($link);
}

