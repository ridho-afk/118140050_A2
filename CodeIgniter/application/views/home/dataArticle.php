<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <style>

    * {
        padding: 0;
        margin: 0;
        font-family: 'DM Sans', sans-serif;
    }

    body {
        background-color: #fff
    }

    a {
        text-decoration: none;
        color: black;
    }
        
    .banner {
        background-image: url(https://i.pinimg.com/originals/47/0a/19/470a19a36904fe200610cc1f41eb00d9.jpg );
        height: 300px;
        width: 100%;
        background-repeat: repeat;
        background-size: cover; 
        background-position-y: -16rem;
        /* background-position-x: 10rem; */
    }

    .text-center-title {
        text-align: center;
    }

    .banner > h2 {
        color: #fefefe;
        font-size:45px;
        padding: 60px 0;
    } 

    .banner > a {
        padding:10px 20px;
        background-color: royalblue;
        border-radius: 5px;
        color: black;
    }

    .container {
        background-image: url(https://image.freepik.com/free-vector/muhammad-ibn-musa-al-khwarizmi-illustration_202581-61.jpg );
        width: 84%;
        margin: 30px auto;
        background-size: cover; 
        background-position-y: -24rem;
    }

    .d-flex {
        
        display: flex;
        flex-wrap: wrap;
        
    }

    .card {
        width: 260px;
        /* height: 420px; */
        background-color: #fefefe;
        /* border: 1px solid #f5f5f5; */
        margin: 10px;
    }

    .img > img {
        width: 100%;
        height: 200px;
        margin-bottom: 15px;
        border-radius: 5px 5px 0 0;
    }

    .card-body {
        margin-bottom: 20px;
    }

    .card-body > a {
        margin-bottom: 20px;
        font-size: 18px;
        font-weight: 600;
    }

    .card-body > p {
        margin-bottom: 15px;
        font-size: 13px;
    }

    .space-around {
        justify-content: space-around;
    }

    .yellowUpdate {
        color: #dd5b02;
        font-weight: 500;
    }

    .redDelete {
        color: #fa6363;
        font-weight: 500;
    }

    .infoUser {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    </style>
</head>
<body>
    
    <div class="text-center-title banner">
        <h2>Daftar Artikel</h2>
        <a href=" <?php echo base_url('index.php/home/tambahArticle'); ?> ">Tambah Artikel</a>
    </div>

    <div class="container">

        <div class="infoUser">
            <p>WELCOME, <b><?php echo $this->session->userdata('username'); ?></b></p>
            <?php echo anchor('home/logout', 'Logout', ['class' => 'redDelete']); ?>	
        </div>

        <div class="d-flex">

            <?php foreach($dataArticle as $data){ ?>
                <div class="card">
                    <div class="img">
                        <img src="<?php echo base_url('upload/') . $data->cover_img; ?>" alt="">
                    </div>
                    <div class="card-body">
                        <a href=""><?php echo $data->title; ?></a>
                        <br><br>

                        <p> <?php echo substr($data->article, 0, 120) ?> </p>
                    </div>
                    <?php if($this->session->userdata('role') == 2323 || $data->user_id == $this->session->userdata('id')){ ?>
                        <div class="card-footer">
                            <div class="d-flex space-around">
                                <?php echo anchor('home/update/'.$data->id, 'Update', ['class' => '']); ?>	
                                <?php echo anchor('home/deleteArticle/'.$data->id, 'Hapus', ['class' => 'redDelete']); ?>	
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>

</body>
</html> 