<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index($typeProduk = ['id'])
    {

        if ($this->session->userdata('email')) {
            $data['leptop'] = $this->db->get_where('produk', ['id' => $typeProduk])->row_array();
            // var_dump($pr);
            // die;
            $data['title'] = 'Form Pembelian';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['is_active'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('produkdtl/header_dtl', $data);
            if ($data['is_active'] < 1) {
                $this->load->view('templates/topbar_explor', $data);
            } else {
                $this->load->view('templates/topbar_explor_user', $data);
            }
            $this->load->view('produkdtl/from_pembelian', $data);
            $this->load->view('templates/footer_explor', $data);
        } else {
            redirect('auth');
        }
        //$pr['typeProduk'] = $this->db->get_where('produk', ['id' => $p])->row_array();

    }
    public function input_pembelian()
    {
        $merek     = $this->input->post('merek');
        $name      = $this->input->post('name');
        $email     = $this->input->post('email');
        $alamat     = $this->input->post('alamat');
        $nomor     = $this->input->post('nomor');
        $catatan     = $this->input->post('catatan');
        $userfile = $_FILES['userfile']['name'];
        // if ($userfile = '') {
        // } else {
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 9000000;
        $this->load->library('upload', $config);

        move_uploaded_file($_FILES['userfile']['tmp_name'], $config['upload_path'] . $userfile);

        if ($this->upload->do_upload('userfile')) {
            echo "Upload bukti Pembayaran Gagal";
        } else {
            // $bayar = $this->upload->data('file_name');
            $userfile = $_FILES['userfile']['name'];
        }
        $this->load->library('upload', $config);
        // }
        $data = array(
            'merek' => $merek,
            'name' => $name,
            'email' => $email,
            'alamat' => $alamat,
            'nomor' => $nomor,
            'catatan' => $catatan,
            'bayar' => $userfile
        );

        $this->db->insert('pembelian', $data);
        //$this->M_barang->tambah_barang();
        // var_dump($data);
        // die;

        redirect('user/pesanan');
    }
}
