<html>
<head>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<table border='1'>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
    </tr>
    <?php
        include "koneksi.php";
        $hasil=mysqli_query($kon,"select * from mahasiswa order by nim asc");
        $no=0;
        while($data = mysqli_fetch_array($hasil)):
            $no++;
    ?>
    <tr id="<?php echo $data['nim']; ?>">
        <td><?php echo $no; ?></td>
        <td data-target="nim"><?php echo $data['nim']; ?></td>
        <td  data-target="nama"><?php echo $data['nama']; ?></td>
        <td  data-target="prodi"><?php echo $data['prodi']; ?></td>
        <td  data-target="angkatan"><?php echo $data['angkatan']; ?></td>
        <td><button><a href="#" data-role="update" data-id="<?php echo $data['nim']; ?>">update</a></button></td>
        <td><button><a href="#" data-role="delete" data-id="<?php echo $data['nim']; ?>">delete</a></button></td>
    </tr>
    
        <?php endwhile;?>
</table>   


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
                <label>NIM</label>
                <input type="number" id="nim" class="form-control"><br>
            </div>
                <div class="form-group">
                <label>Nama</label>
                <input type="text" id="nama" class="form-control"><br>
                </div>
                <div class="form-group">
                <label>Prodi</label>
                <select id="prodi" class="form-control">
                    <option value="IF">Teknik Informatika</option>
                    <option value="EL">Teknik Elektro</option>
                    <option value="TG">Teknik Geofisika</option>
                    <option value="SI">Teknik Sipil</option>
                    <option value="MA">PWK</option>
                </select>
                </div>
                <div class="form-group">
                <label>Angkatan</label>
                <select id="angkatan" class="form-control">
                    <option value="15">2015</option>
                    <option value="16">2016</option>
                    <option value="17">2017</option>
                    <option value="18">2018</option>
                    <option value="19">2019</option>
                    <option value="20">2020</option>
                </select>
                </div>
                <input type="hidden" id="uid" class="form-control">
      </div>
      <div class="modal-footer">
          <a href="#" id="save" class="btn btn-primary pull-right">Update</a>   
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
        $(document).ready(function(){
            $(document).on('click','a[data-role=update]',function(){
                var id = $(this).data('id');
                var nim = $('#' +id).children('td[data-target=nim]').text();
                var nama = $('#' +id).children('td[data-target=nama]').text();
                var prodi = $('#' +id).children('td[data-target=prodi]').text();
                var angkatan = $('#' +id).children('td[data-target=angkatan]').text(); 

                $('#nim').val(nim);
                $('#nama').val(nama);   
                $('#prodi').val(prodi);   
                $('#angkatan').val(angkatan);  
                $('#uid').val(id);
                $( '#myModal').modal('toggle');  
                   
            });
            $('#save').click(function(){
                var id = $('#uid').val();
                var nim = $('#nim').val();
                var nama = $('#nama').val();
                var prodi = $('#prodi').val();
                var angkatan = $('#angkatan').val();

                $.ajax({
                    url    : 'update.php',
                    method : 'post',
                    data    : {nim : nim , nama : nama , prodi : prodi, angkatan : angkatan,id : id},
                    success  : function (response){
                        $('#' +id).children('td[data-target=nim]').text(nim);
                        $('#' +id).children('td[data-target=nama]').text(nama);
                        $('#' +id).children('td[data-target=prodi]').text(prodi);
                        $('#' +id).children('td[data-target=angkatan]').text(angkatan); 
                        $('#myModal').modal('toggle');

                    }
                });
            });
            $(document).on('click','a[data-role=delete]',function(){
                var id = $(this).data('id');
                $.ajax({
                    url : 'delete.php',
                    method : 'post',
                    data: {id:id},
                    success: function(data) {
                        $('#tampil_data').load("tampil.php");
                    }
                });  
            });
            
        });
        </script>
</html>