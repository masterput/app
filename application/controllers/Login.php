<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index()
    {
        //load view form login
        $this->load->view('login');
    }

    public function cek_login()
    {
        //load model 
        $this->load->model('M_admin');

        // $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //cek login via model
        $cek = $this->M_admin->cek_login($email, $password);

        if(!empty($cek)){

            foreach($cek as $user) {
                //looping data user
                $session_data = array(
                    'username'   => $user->username,
                    'email' => $user->email
                );
                //buat session berdasarkan user yang login
                $this->session->set_userdata($session_data);
            }
            echo "success";
        } else {
            echo "error";
        }

    }

}