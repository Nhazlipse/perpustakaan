<?php
include_once "layout/header.php"; ?>
<?php

?>

<!-- Data Pengunjung -->
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung pada <?= date('d-m-Y') ?></h6>
        </div>

        <!-- card body -->
        <div class="card-body">
            <a href="index.php" class="btn btn-danger mb-3"><i class="fa fa-backward"></i> Back</a>

            <!-- buat kolom -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Nama Pengunjung</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Hp.</th>
                        </tr>
                    </thead>

                    <!-- deklarasikan dan panggil koneksi database -->
                    <tbody>
                        <?php
                        $tgl = date('Y-m-d');
                        $query = "SELECT * FROM ttamu where tanggal like '%$tgl%' order by id desc";
                        $tampil = $koneksi->query($query);
                        $no = 1;
                        while ($data = mysqli_fetch_array($tampil)) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['tanggal'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['nope'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- akhir container -->

    <?php include "layout/footer.php"; ?>