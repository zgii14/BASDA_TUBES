<?php
session_start();
include 'top.php';
include 'koneksi_database.php';
$kode_barang = $_GET["kode_barang"];
if (isset($_GET["kode_barang"])) {
    $brg = query("SELECT * FROM tambah_barang WHERE kode_barang = $kode_barang")[0];
}
if (isset($_POST["submit"])) {
    $kategori = $_POST["kategori"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $sinopsis = $_POST["sinopsis"];
    $gambar_barang = $_POST["gambar_barang"];

    if (ubah($_POST) > 0) {
        echo "
        <script> 
            alert('Data berhasil diubah!'); 
            document.location.href = 'data_inventaris.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('Data gagal diubah!'); 
            document.location.href = 'data_inventaris.php';
        </script>";
    }
}
?>

<!-- Halaman Edit -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row" style="min-height: 500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Data Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form_edit" action="" method="post">
                            <input type="hidden" name="kode_barang" value="<?= $brg["kode_barang"]; ?>">
                            <label>Nama Barang:</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required value="<?= $brg["nama_barang"]; ?>"><br>

                            <label>Kategori:</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $brg["kategori"]; ?>"><br>

                            <label>Jumlah Barang:</label>
                            <input type="text" name="jumlah_barang" class="form-control" value="<?= $brg["jumlah_barang"]; ?>">

                            <input type="hidden" name="gambar_barang" value="<?= $brg["gambar_barang"]; ?>" class="form-control"><br>

                            <label>Sinopsis:</label>
                            <textarea name="sinopsis" class="form-control"><?= $brg["sinopsis"]; ?></textarea><br>

                            <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
