<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function get_admin() {
        //select semua data admin
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get();
    }

    public function simpan_admin($data) {
        //insert data
        return $this->db->insert("tbl_admin", $data);
    }

    public function edit_admin($id_admin) {
        //edity data
        $query = $this->db->where("id_admin", $id_admin)->get("tbl_admin");
        return $query->row();
    }

    public function update_admin($data, $id_admin) {
        //update siswa
        return $this->db->update("tbl_admin", $data, $id_admin);
    }

    public function hapus_admin($id_admin) {
        //hapus siswa
        return $this->db->delete("tbl_admin", $id_admin);
    }
}