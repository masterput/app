<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function index() {
        //load model
        $this->load->model('admin/M_admin');

        $data = array(
            'data_admin' => $this->M_admin->get_admin()->result()
        );
        //load view
        $this->load->view('admin/data_admin', $data);
    }

    public function tambah() {
        //load view
        $this->load->view('admin/tambah_admin');
    }

    public function simpan() {
        //load model
        $this->load->model('admin/M_admin');

            $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role' => $this->input->post('role')
        );
            //insert data via model
            $this->M_admin->simpan_admin($data);

            //redirect ke controller siswa
            redirect('admin');
    }

    public function edit($id_admin) {
        //load model 
        $this->load->model('admin/M_admin');

        //get ID dari URL segment ke 3
        $id_admin = $this->uri->segment(3);

        $data = array(
            'data_admin' => $this->M_admin->edit_admin($id_admin)
        );

        //load view
        $this->load->view('admin/edit_admin', $data);
    }

    public function update() {
        //load model
        $this->load->model('admin/M_admin');

        //get data dari form
        $id_admin['id_admin'] = $this->input->post("id_admin");
        $username             = $this->input->post('username');
        $email                = $this->input->post('email');
        $password             = $this->input->post('password');

        $data = array(
            'username'         => $username,    
            'email'            => $email,
            'password'         => $password,
        );

        //update via model    
        $this->M_admin->update_admin($data, $id_admin);

        //redirect ke controller siswa
        redirect('admin');
    }

    public function hapus($id_siswa) {
        //load model
        $this->load->model('admin/M_admin');

        //get ID dari URL segment ke 3
        $id['id_admin'] = $this->uri->segment(3);

        //delete via model
        $this->M_admin->hapus_admin($id);

        //redirect ke controller siswa
        redirect('admin');

    }


}