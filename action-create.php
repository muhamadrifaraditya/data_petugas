<?php
if(isset($_POST['Submit'])){
    $IdPetugas = $_POST['IdPetugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $PilihLevel = $_POST['PilihLevel'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$IdPetugas','$username','$password','$NamaPetugas','$PilihLevel') ");

    if($result){
        echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Petugas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>