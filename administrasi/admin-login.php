<!DOCTYPE html>

<?php include "header.php" ?>

<head>
    <title>Login Admin | Pemograman WEB</title>
</head>

<!-- awal login -->

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Card Body -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">

                        <!-- Sampul login -->
                        <div class="row">
                            <div class="col-lg-6 d-lg-block bg-primary shadow-lg p-5 text-center">
                                <h3 class="text-white"><b>Buku Tamu <br> Pemograman Web</b></h3>
                                <img src="assets/img/uniska.png" alt="">
                            </div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <!-- form login -->
                                    <form class="user" action="ceklogin.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>

                                    <br>
                                    <!-- form tombol masuk jika bukan admin -->
                                    <form class="user" action="index.php">
                                        <button class="btn btn-info btn-user btn-block">Masuk sebagai Pengunjung</button>
                                    </form>

                                    <!-- footer -->
                                    <div class="text-center">
                                        <hr>
                                        <a class="small"><b>Pemograman Web <br><?= date('d-m-Y') ?></b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>