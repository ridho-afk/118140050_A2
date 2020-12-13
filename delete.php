<?php
include "koneksi.php";

$id=$_POST["id"];
$sql = "DELETE FROM mahasiswa WHERE nim=$id";

$hasil=mysqli_query($kon,$sql);
?>