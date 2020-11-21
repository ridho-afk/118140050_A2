<?php
    $cari=$_POST['cari'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"kampus");
    $hasil=mysqli_query($conn,"select * FROM mahasiswa inner join jurusan on mahasiswa.id_jurusan=jurusan.id_jurusan where mahasiswa.nama like '$cari' ");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah ";echo"<br>";
    while($baris=mysqli_fetch_array($hasil)){
        echo "NRP : ";echo $baris[0];echo"<br>";
        echo "NAMA : ";echo $baris[1];echo"<br>";
        echo "ALAMAT : ";echo $baris[2];echo"<br>";
        echo "JURUSAN : ";echo $baris[5];echo"<br>";
    }
?>
<a href='view.php' >kembali</a>