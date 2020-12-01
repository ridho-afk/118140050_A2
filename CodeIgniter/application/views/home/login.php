<?php echo doctype('html5'); ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Login Data</title>
  </head>
  <style>
    body {
      background-image: url(https://i.pinimg.com/originals/47/0a/19/470a19a36904fe200610cc1f41eb00d9.jpg );
      
        background-size: cover; 
        font color : white;
        
    }
    </style>

  <body>


    <?php

        validation_errors();

        $username = array(
            'name'            => 'username',
            'type'            => 'text',
            'value'           => "",
            'placeholder'     => 'Username',
        );

        $password = array(
            'name'            => 'password',
            'type'            => 'password',
            'placeholder'     => 'Password',
            'value'           => "",
        );

        $submit = array(
            'name'            => 'insertusers',
            'type'            => 'submit',
            'value'           => 'Login Data',
            'placeholder'     => '',
        );

        echo  form_open_multipart('home/loginAction');
        ?>
          <font color = white>Username</font><br>
          <?php
          echo form_input($username);
          echo  form_error('username');
            echo  br(2);


          ?>
          <font color = white>Password</font><br>
          <?php
          echo form_input($password);
          echo  form_error('password');
            echo  br(2);

          echo  form_submit($submit);
            echo br(2);

        echo form_close();

        if ($this->session->flashdata('sukses_insert_users') <> '') {
          echo $this->session->flashdata('sukses_insert_users');
        }

     ?>
    <a href=" <?php echo base_url('index.php/home/register'); ?> ">Register</a>

  </body>
</html>
