<?php
include 'header.php';

?>


<!-- awal Row -->
<div class="container1">
    <div class="row mt-2">
        <div class="col-lg-7 mb-3">

            <!-- card body -->
            <div class="card shadow bg-gradient-light">
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Register Pengunjung</h1>
                    </div>

                    <!-- Form Daftar Pengunjung -->
                    <form class="user" method="POST" action="user\operasi-index2.php" enctype="multipart/form-data" accept="image/*">
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
                            <input type="text" class="form-control form-control-user" name="pengguna" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" name="passwd" placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="file" id="file" accept="image/*">
                        </div>

                        <button type="submit" name="simpan" value="Upload" class="btn btn-primary btn-user btn-block">Register User</button>
                    </form>

                    <!-- Form Login User (bukan admin) -->
                    <form class="user" action="user\login-user.php">
                        <br>
                        <button type="submit" name="lihat" class="btn btn-info btn-user btn-block">Login sebagai User</button>
                    </form>

                    <!-- Form Lihat List Pengunjung (bukan admin) -->
                    <form class="user" action="user\listpengunjung.php">
                        <br>
                        <button type="submit" name="lihat" class="btn btn-danger btn-user btn-block">Histori Pengunjung</button>
                    </form>

                    <!-- Form Login ke Admin -->
                    <form class="user" action="..\perpustakaan\administrasi\admin-login.php">
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




<?php include 'footer.php'; ?>