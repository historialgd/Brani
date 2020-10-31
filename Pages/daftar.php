<?php
    require('connect.php');
    $nama = $_POST['nama'];
    $pw = $_POST['pw'];
    $notelp = $_POST['notelp'];
    $sql = "INSERT INTO `tb_dataprib` (`nama`, `notelp`, `password`, `id`) VALUES ('$nama', '$notelp', '$pw', '0')";
    $rs = mysqli_query($con, $sql);
    if($rs){
        header('Location: loginweb.php');
    }
?>
