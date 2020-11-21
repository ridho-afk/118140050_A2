<?php
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"kampus");
    $hasil = mysqli_query($conn,"select * FROM mahasiswa inner join jurusan on mahasiswa.id_jurusan=jurusan.id_jurusan");
    $jumlah = mysqli_num_rows($hasil);
    $a=1;
    echo "<center>Daftar Mahasiswa</center>";
    echo "Jumlah pengunjung : $jumlah";
    while($baris = mysqli_fetch_array($hasil)){
        echo"<br>";
        echo $a;
        echo "<br>"; echo "NRP : ";echo $baris[0];echo"<br>";
        echo "<br>"; echo "NAMA : ";echo $baris[1];echo"<br>";
        echo "<br>"; echo "ALAMAT : ";echo $baris[2];echo"<br>";
        echo "<br>"; echo "JURUSAN : ";echo $baris[5];echo"<br>";
        $a++;
    }
?>
<p style="font-size:24px">
<a href='search.html' >search</a>
<a href='delete.html' >delete</a>
<a href='tambah.html' >tambah</a>
</p>
