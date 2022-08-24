<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = ' Profile Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function pesanan()
    {
        $data['title'] = 'pesan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_Menu', 'menu');
        $rp = $this->session->userdata('email');


        //$data['email'] = "SELECT * FROM pembelian WHERE email = $rp";
        $data2['email2'] = $this->db->get_where('pembelian', ['email' => $rp])->row_array();
        $data['email'] = $this->db->get('pembelian')->result_array();
        // $data['leptop'] = $this->db->get_where('produk', ['id' => $typeProduk])->row_array();
        // var_dump($data2);
        // die;
        // $data['subMenu'] = $this->menu->getSubMenu();
        //$data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        if ($data['user'] == 'admin@gmail.com') {
            $this->load->view('produkdtl/pembeli', $data2);
        } else {
            $this->load->view('produkdtl/pesanan', $data);
        }


        $this->load->view('templates/footer');
    }
}
