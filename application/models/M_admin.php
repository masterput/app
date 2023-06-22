<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_model {

    // fungsi simpan data register
    public function simpan_register($data) {
        return $this->db->insert("tbl_admin", $data);
    }

    function cek_login($email, $password) {
        $this->db->select("*");
        $this->db->from("tbl_admin");
        $this->db->where("email", $email);
        $query = $this->db->get();
        $user = $query->row();

        /**
         * Check password
         */
        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                return $query->result();
            } else {
                return FALSE;
            }
            } else {
            return FALSE;
            }
    }
}