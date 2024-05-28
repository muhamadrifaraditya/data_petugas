<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:auth-login-petugas.php?pesan=gagal");
    }
?>

<?php require('../template/header.php'); ?>

<?php require('../template/navbar.php'); ?>

<?php require('../template/sidebar.php'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Petugas</h1>
        </div>
        <div class="section-body">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <p class="h3">Tambah Data Petugas</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="action-create.php" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="IdPetugas">ID Petugas</label>
                                    <input id="IdPetugas" type="text" class="form-control" name="IdPetugas" tabindex="1" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="1" required>
                                </div>
                                <div class="form-group">
                                    <label for="NamaPetugas">Nama Petugas</label>
                                    <input id="NamaPetugas" type="text" class="form-control" name="NamaPetugas" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                <label for="PilihLevel" class="form-label">Level</label>
                                        <select class="form-control" aria-label="select" name="PilihLevel" id="PilihLevel">
                                            <option value="Pilih">Pilih Level</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Petugas">Petugas</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>