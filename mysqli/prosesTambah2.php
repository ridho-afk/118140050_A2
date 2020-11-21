<!DOCTYPE html>
<html>
    <head>
        <title>Simpan Data</title>
    </head>
    <body>
        <h1>Simpan data Mahasiswa</h1>
        <?php
           
            
            $NRP = $_POST["NRP"];
            $NAMA = $_POST["NAMA"];
            $Alamat = $_POST["Alamat"];
            $Jurusan = $_POST["jurusan"];
            
            $conn=mysqli_connect ("localhost","root","")
            or die ("koneksi gagal");
            mysqli_select_db($conn,"kampus");
            echo "NRP :$NRP <br>";
            echo "Nama :$NAMA <br>";
            echo "Alamat :$Alamat <br>";
            echo "Jurusan :$Jurusan <br>";
            $sqlstrr="insert into jurusan (id_jurusan,nama) values ('1','IF'),('2'.'PWK'),('3','AR')";
            $asil=mysqli_query($conn,$sqlstrr);
            $sql = "select id_jurusan as last_id from jurusan where nama like '$Jurusan'";
            $hasil=mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($hasil);
            $lastId = $row['last_id'];
            $sqlster="insert into mahasiswa (NRP,NAMA,Alamat,id_jurusan) values ('$NRP','$NAMA','$Alamat','$lastId')";
            $hasil1=mysqli_query($conn,$sqlster);
            echo "Simpan data berhasil<br>";

            ?>
            <a href='view.php' >kembali</a>
         </body>
 </html>