<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Menu Manajement';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->POST('menu')]);
            redirect('menu');
        }
    }

    public function delete($m = ['id'])
    {
        $id = $m;
        $query = "DELETE FROM user_menu WHERE id = $id";
        $this->db->query($query);
        redirect('menu');
    }


    public function submenu()
    {
        $data['title'] = 'Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_Menu', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);

            redirect('menu/submenu');
        }
    }
    public function delete_sub($sm = ['id'])
    {
        $id = $sm;
        $query = "DELETE FROM user_sub_menu WHERE id = $id";
        $this->db->query($query);
        redirect('menu/submenu');
    }
    public function produk()
    {
        $data['title'] = 'Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();

        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('typeProduk', 'TypeProduk', 'required');
        $this->form_validation->set_rules('prosesor', 'Prosesor', 'required');
        $this->form_validation->set_rules('storage', 'Storage', 'required');
        $this->form_validation->set_rules('ram', 'Ram', 'required');
        $this->form_validation->set_rules('layar', 'Layar', 'required');
        $this->form_validation->set_rules('gpu', 'Gpu', 'required');
        $this->form_validation->set_rules('fitur', 'Fitur', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        //$this->form_validation->set_rules('img', 'Img', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/produk', $data);
            $this->load->view('templates/footer');
        } else {
            $merek      = $this->input->post('merek');
            $typeProduk = $this->input->post('typeProduk');
            $prosesor   = $this->input->post('prosesor');
            $storage    = $this->input->post('storage');
            $ram        = $this->input->post('ram');
            $layar      = $this->input->post('layar');
            $gpu        = $this->input->post('gpu');
            $fitur      = $this->input->post('fitur');
            $harga      = $this->input->post('harga');
            $img        = $_FILES['img']['name'];
            if ($img = '') {
            } else {
                $config['upload_path']          = './assets/produk';
                $config['allowed_types']        = 'jpg|png|gif';
                $config['max_size']             = 50000000;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('img')) {
                    echo "Gagal upload";
                } else {
                    $img = $this->upload->data('file_name');
                }
            }

            $data = array(
                'merek' => $merek,
                'typeProduk' => $typeProduk,
                'prosesor' => $prosesor,
                'storage' => $storage,
                'ram' => $ram,
                'layar' => $layar,
                'gpu' => $gpu,
                'fitur' => $fitur,
                'harga' => $harga,
                'img' => $img,
            );

            $this->db->insert('produk', $data);
            // var_dump($data);
            // die;
            redirect('menu/produk');
        }
    }
    public function delete_produk($m = ['id'])
    {
        $id = $m;
        $query = "DELETE FROM produk WHERE id = $id";
        $this->db->query($query);
        redirect('menu/produk');
    }
    public function Pembeli()
    {
        $data['title'] = 'Pembelian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('M_Menu', 'menu');
        $data['beli'] = $this->db->get('pembelian')->result_array();

        // $data['subMenu'] = $this->menu->getSubMenu();
        //  $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('produkdtl/pembeli', $data);
        $this->load->view('templates/footer');
    }
}
