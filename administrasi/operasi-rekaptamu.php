<!-- tampilkan data yang di minta -->
<?php

use database\koneksi;

if (isset($_POST['tampilkan'])) :
?>

    <!-- tabel data -->
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
                    <th>Action</th>
                </tr>
            </thead>


            <!-- deklarasikan dan panggil koneksi database -->
            <tbody>
                <?php
                $tgl1 = $_POST['tanggal1'];
                $tgl2 = $_POST['tanggal2'];
                $query = "SELECT * FROM ttamu where tanggal between '$tgl1' and '$tgl2' order by id desc";
                $koneksi = new koneksi();
                $tampil = $koneksi->query($query);
                $no = 1;
                if (mysqli_num_rows($tampil) == 0) {
                    echo "<tr><td colspan=7>Data tidak ditemukan</td></tr>";
                }
                while ($data = mysqli_fetch_array($tampil)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['nope'] ?></td>
                        <td>

                            <!-- buat tombol edit hapus -->
                            <a href="editformtamu.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="hapustamu.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<?php endif; ?>