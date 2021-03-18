<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Model','model_model');
        $this->load->library('facebook');
		$this->facebook->enable_debug(TRUE);
    }

    public function index(){
        $opengraph = 	array(
            'type'				=> 'website',
            'title'				=> 'My Awesome Site',
            'url'				=> site_url(),
            'image'				=> '',
            'description'		=> 'The best site in the whole world'
        );

        $this->load->vars('opengraph', $opengraph);

        if($this->session->userdata('email')){
            redirect('user');
        }

        $this->load->view('login/index');
    }

    public function ceklogin(){
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->model_model->getUsername($username);

        if($getUser){
            $data=[
                'username'=>$username,
                'loggedin_time'=>time()
            ];
            $this->session->set_userdata($data);
            redirect('user');
        }else{
            $this->session->set_flashdata('message','<p>User tidak terdaftar</p>');
            redirect('login');
        }
    }

		function login()
		{
			if ( !$this->facebook->logged_in() )
			{
			
				$this->facebook->set_callback(site_url('login'));

				$this->facebook->login();

			}
			else
			{
				redirect('login');
			}
		}
		
		function logout()
		{
			$this->facebook->logout();
			redirect('login');
		}
	}

    ?>
