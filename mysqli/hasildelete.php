<?php
    $cari=$_POST['cari'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"kampus");
    mysqli_query($conn,"delete from mahasiswa where NRP='$cari'");
    echo "DATA TERHAPUS <br>";
?>
<a href='view.php' >kembali</a>