<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Explor extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'WarTegnologi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['is_active'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merek'] = $this->db->get('produk')->result_array();

        $this->load->view('templates/header_explor');

        if ($data['is_active'] < 1) {
            $this->load->view('templates/topbar_explor');
        } else {
            $this->load->view('templates/topbar_explor_user', $data);
        }

        $this->load->view('explor/carousel_explor');
        $this->load->view('explor/produk_explor', $data);
        $this->load->view('templates/footer_explor');
    }

    public function tentang()
    {
        $data['title'] = 'Tentang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['is_active'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_explor');

        if ($data['is_active'] < 1) {
            $this->load->view('templates/topbar_explor');
        } else {
            $this->load->view('templates/topbar_explor_user', $data);
        }

        $this->load->view('explor/about', $data);
        $this->load->view('templates/footer_explor');
    }

    public function barangdtl($p = ['id'])
    {
        $pr['typeProduk'] = $this->db->get_where('produk', ['id' => $p])->row_array();
        // var_dump($pr);
        // die;
        $data['title'] = 'Produkleptop';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['is_active'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('produkdtl/header_prd', $data);
        if ($data['is_active'] < 1) {
            $this->load->view('templates/topbar_explor', $data);
        } else {
            $this->load->view('templates/topbar_explor_user', $data);
        }

        $this->load->view('explor/dtlprd', $pr);

        $this->load->view('templates/footer_explor', $data);
    }
}
