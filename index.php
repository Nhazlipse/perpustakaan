<?php include "header.php"; ?>
<?php include "operasi-index.php"; ?>


<!-- awal Head -->
<div class="head text-center">
    <img src="assets/img/uniska.png" alt="logo-uniska" width="150" height="150">
    <h2 class="text-white"><b>Aplikasi Buku Tamu <br> Pemograman WEB</b></h2>
</div>
<!-- end Head -->

<!-- awal Row -->
<div class="container1">
    <div class="row mt-2">
        <div class="col-lg-7 mb-3">

            <!-- card body -->
            <div class="card shadow bg-gradient-light">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Daftar Pengunjung</h1>
                    </div>

                    <!-- Form Daftar Pengunjung -->
                    <form class="user" method="POST" action="">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nope" placeholder="No Hp." required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="komentar" placeholder="Komentar" required>
                        </div>

                        <button type="submit" name="simpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>
                    </form>

                    <!-- Form Lihat List Pengunjung (bukan admin) -->
                    <form class="user" action="listpengunjung.php">
                        <br>
                        <button type="submit" name="lihat" class="btn btn-danger btn-user btn-block">Histori Pengunjung</button>
                    </form>

                    <!-- Form Login ke Admin -->
                    <form class="user" action="admin-login.php">
                        <br>
                        <button type="submit" name="logon" class="btn btn-success btn-user btn-block">Login sebagai Admin</button>
                    </form>

                    <hr>
                    <div class="text-center">
                        <a class="small"><b>Pemograman Web | <?= date('d-m-Y') ?></b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Row -->

<?php include "footer.php"; ?>