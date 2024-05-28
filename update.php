<?php
session_start();
if ($_SESSION['level'] == "") {
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Kelas</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Update Data Petugas</p>
                        </div>
                        <?php
                        include "../koneksi.php";
                        $IdPetugas = $_GET['id_petugas'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas = $IdPetugas");
                        $data = mysqli_fetch_array($query_mysql); { ?>
                            <form method="POST" action="action-update.php" class="needs-validation" novalidate="">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="IdPetugas" class="form-label">ID Petugas</label>
                                        <input id="IdPetugas" type="text" class="form-control" name="IdPetugas" value="<?php echo $data['id_petugas']; ?>" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username']; ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Password</label>
                                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $data['password']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                        <input type="text" class="form-control" id="nama_petugas" name="NamaPetugas" value="<?php echo $data['nama_petugas'];  ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="PilihLevel" class="form-label">Level</label>
                                        <select class="form-control" aria-label="select" name="PilihLevel" id="PilihLevel">
                                            <option selected value="<?php echo $data['level']; } ?>">
                                            </option>
                                            <option value="admin">admin</option>
                                            <option value="petugas">petugas</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>