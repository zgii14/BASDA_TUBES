<?php
session_start();
include 'top.php';
include 'koneksi_database.php';
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Peminjaman barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="login_wrapper">
                            <section class="login_content" style="margin-top: -40px;">
                                <form name="form1" action="" method="post" enctype="multipart/form-data">

                                    <div style="text-align: left">Nama Peminjam</div>
                                    <select name="nama_peminjam" class="form-control selectpicker">
                                        <?php
                                        $res = mysqli_query($link, "select nama from users where role = 'member'");
                                        while ($row = mysqli_fetch_array($res)) {
                                            echo "<option>";
                                            echo $row["nama"];
                                            echo "</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>

                                    <div>
                                        <div style="text-align: left;">Tanggal Peminjaman :</div>
                                        <input type="text" placeholder="<?php date_default_timezone_set("Asia/Makassar");
                                                                        echo date("d / m / Y"); ?>" class="form-control" name="tgl_peminjaman" disabled />
                                    </div>

                                    <div>
                                        <div style="text-align: left;">Tanggal Pengembalian (Rencana) :</div>
                                        <input type="date" class="form-control" placeholder="Tanggal Pengembalian" name="tgl_pengembalian" required="" />
                                    </div>

                                    <br>

                                    <div style="text-align: left">Nama Barang</div>
                                    <select name="kode_barang" class="form-control selectpicker">
                                        <?php
                                        $res = mysqli_query($link, "select nama_barang, kode_barang, jumlah_barang from tambah_barang");
                                        while ($row = mysqli_fetch_array($res)) {
                                            echo "<option value='" . $row["kode_barang"] . "'>";
                                            echo $row["kode_barang"] . ". " . $row["nama_barang"] . " (" . $row["jumlah_barang"] . " stok)";
                                            echo "</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>

                                    <div>
                                        <input type="number" class="form-control" placeholder="Banyaknya" name="banyaknya" required="" />
                                    </div>

                                    <div class="col-lg-12  col-lg-push-3">
                                        <input class="btn btn-primary submit " type="submit" name="submit1" value="Tambah">
                                    </div>

                                </form>
                            </section>

                            <?php
                            if (isset($_POST["submit1"])) {
                                $date = date('Y-m-d');
                                $nama_peminjam = $_POST['nama_peminjam'];
                                $tgl_pengembalian = $_POST['tgl_pengembalian'];
                                $kode_barang = $_POST['kode_barang'];
                                $banyaknya = $_POST['banyaknya'];

                                // Check if there are enough items in stock
                                $result = mysqli_query($link, "SELECT jumlah_barang FROM tambah_barang WHERE kode_barang = $kode_barang");
                                $row = mysqli_fetch_array($result);
                                $jumlah_barang = $row['jumlah_barang'];

                                if ($jumlah_barang >= $banyaknya) {
                                    // Decrement the jumlah_barang in tambah_barang table
                                    mysqli_query($link, "UPDATE tambah_barang SET jumlah_barang = jumlah_barang - $banyaknya WHERE kode_barang = $kode_barang");

                                    // Insert into peminjaman table
                                    mysqli_query($link, "INSERT INTO peminjaman (nama_peminjam, tgl_peminjaman, tgl_pengembalian, kode_barang, banyaknya) 
                                VALUES ('$nama_peminjam', '$date', '$tgl_pengembalian', '$kode_barang', '$banyaknya')");

                            ?>
                                    <div class="alert alert-success col-lg-12 col-lg-push-0" style="text-align: center">
                                        Peminjaman Sukses
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="alert alert-danger col-lg-12 col-lg-push-0" style="text-align: center">
                                        Stok barang tidak mencukupi!
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
include 'footer.php';
?>