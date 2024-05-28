<?php
if(isset($_POST['Submit'])){
    $IdPetugas = $_POST['IdPetugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $NamaPetugas = $_POST['NamaPetugas'];
    $PilihLevel = $_POST['PilihLevel'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE petugas SET id_petugas = '$IdPetugas',username='$username',password='$password',nama_petugas='$NamaPetugas',level='$PilihLevel' WHERE id_petugas='$IdPetugas' ");

    if($result){
        echo "<script>alert('Data Petugas berhasil diupdate'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Petugas gagal diupdate'); window.location.href='read.php'</script>";
    }
}
?>