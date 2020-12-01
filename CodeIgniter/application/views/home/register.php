<?php echo doctype('html5'); ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Register Data</title>
  </head>
  <style>
    body {
      background-image: url(https://i.pinimg.com/originals/47/0a/19/470a19a36904fe200610cc1f41eb00d9.jpg );
      
        background-size: cover; 
        
    }
    </style>
  <body>


    <?php

        validation_errors();

        $username = array(
            'name'            => 'username',
            'type'            => 'text',
            'value'           => set_value('username'),
            'placeholder'     => 'Username',
        );

        $password = array(
            'name'            => 'password',
            'type'            => 'password',
            'placeholder'     => 'Password',
            'value'           => set_value('password'),
        );

        $email = array(
            'name'            => 'email',
            'type'            => 'email',
            'placeholder'     => 'Email',
            'value'           => set_value('email'),
        );

        $role = array(
          'name'            => 'role',
          'type'            => 'text',
          'value'           => set_value('role'),
          'placeholder'     => 'Role',
      );

        $submit = array(
            'name'            => 'insertusers',
            'type'            => 'submit',
            'value'           => 'Tambah Data',
            'placeholder'     => '',
        );

        echo  form_open_multipart('home/registerProcess');
          ?>
        <font color = white>Username</font><br>
        <?php
          echo form_input($username);
          echo  form_error('username');
            echo  br(2);
          ?>
            <font color = white>Email</font><br>
            <?php
          echo form_input($email);
          echo  form_error('email');
            echo  br(2);
          ?>
            <font color = white>Password</font><br>
            <?php
          echo form_input($password);
          echo  form_error('password');
            echo  br(2);
          ?>
            <font color = white>Role</font><br>
          <?php
          echo form_input($role);
          echo  form_error('role');
            echo  br(2);

          echo  form_submit($submit);
            echo br(2);
        
        echo form_close();

        if ($this->session->flashdata('sukses_insert_users') <> '') {
          echo $this->session->flashdata('sukses_insert_users');
        }

     ?>

  </body>
</html>
