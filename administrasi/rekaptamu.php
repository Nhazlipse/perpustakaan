<?php
include "layout\header.php";
?>

<!-- row awal -->
<div class="row">
    <!-- awal col -->
    <div class="col-md-12">
        <div class="card shadow mb-4 m-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekap Tamu</h6>
            </div>

            <!-- card body -->
            <div class="card-body">
                <form method="POST" action="" class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">

                            <!-- select data pada tanggal -->
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input class="form-control" type="date" name="tanggal1" value="<?= isset($_POST['tanggal1']) ? $_POST['tanggal1'] : date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input class="form-control" type="date" name="tanggal2" value=" <?= isset($_POST['tanggal2']) ? $_POST['tanggal2'] : date('Y-m-d') ?>" required>
                            </div>
                        </div>

                        <!--Create Logout Button in right corner-->
                        <div class="logout1">
                            <div class="col-md-1.2">
                                <button onclick="confirmLogout()" class="btn btn-danger form-control">Logout</button>

                                <script>
                                    function confirmLogout() {
                                        if (confirm("Apakah Anda yakin ingin keluar?")) {
                                            window.location.href = "logout.php";
                                        }
                                    }
                                </script>
                            </div>
                        </div>

                        <!-- buat tombol -->
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                            <button class="btn btn-primary form-control" name="tampilkan"><i class="fa fa-search"></i> Tampilkan</button>
                        </div>
                        <div class="col-md-2">
                            <a href="index.php" class="btn btn-danger form-control" name="tampilkan"><i class="fa fa-backward"></i> Kembali</a>
                        </div>
                    </div>
                </form>

                <?php include "operasi-rekaptamu.php"; ?>

            </div>
        </div>
        <?php include "layout\footer.php"; ?>