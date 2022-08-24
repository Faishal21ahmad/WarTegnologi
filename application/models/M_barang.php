<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    public function tambah_barang($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
