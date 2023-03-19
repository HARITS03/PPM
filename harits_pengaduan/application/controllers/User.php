<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_Home');
        $this->load->library('upload');

        if(!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    //dashboard
    public function index()
    {
        $data['bar_graph'] = $this->mdl_Home->graph_card_masyarakat();

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/template/topbar');
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/template/footer');
    }

    //profil
    public function profil()
    {
        $get['get'] = $this->mdl_Home->get_profil();
        // $pro['profil'] = $this->mdl_Home->profil();

        // $data['profil']=$this->mdl_Home->profil();

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/template/topbar', $get,);
        $this->load->view('user/profil', $get);
        $this->load->view('user/template/footer');
    }
    public function editprofil($nik)
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'telp' => htmlspecialchars($this->input->post('telp')),
        ];
        $this->mdl_Home->editprofil($data, $nik);
        $this->session->set_flashdata('profil', '<div class="alert alert-success" role="alert"> Berhasil Update Data! </div>');
        redirect('userprofil');
    }
    public function resetpassword($nik)
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() == false) {
            redirect('userprofil');
        } else {
            $data = [
                'username' => $this->session->userdata('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            ];
            $this->mdl_Home->editprofil($data, $nik);
            $this->session->set_flashdata('profil', '<div class="alert alert-success" role="alert"> Berhasil di Reset password! </div>');
            redirect('userprofil');
        }
    }

    // pengaduan
    public function pengaduan()
    {
        $nik = $this->mdl_Home->get_user();

        $data['joinpengaduan'] = $this->mdl_Home->joinpengaduandata($nik['nik'])->result_array();

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/template/topbar');
        $this->load->view('user/pengaduan', $data);
        $this->load->view('user/template/footer');
    }

    //pengaduan detail
    public function pengaduandetail($id)
    {
        $data['joinpengaduan2'] = $this->mdl_Home->joinpengaduan2($id)->result_array();
        $data['tanggapan'] = $this->mdl_Home->tanggapan($id)->result_array();

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/template/topbar');
        $this->load->view('user/pengaduandetail', $data);
        $this->load->view('user/template/footer');
    }
    public function pengaduan2()
    {
        $data['kategori'] = $this->mdl_Home->tampilkategori()->result_array();
        $data['kategori_join'] = $this->mdl_Home->joinsubkat()->result_array();
        $data['subkategori'] = $this->mdl_Home->tampilsubkat()->result_array();

        $this->load->view('user/template/header');
        $this->load->view('user/template/sidebar');
        $this->load->view('user/template/topbar');
        $this->load->view('user/tambahpengaduan', $data);
        $this->load->view('user/template/footer');
    }
    public function insertpengaduan()
    {
        $user = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $kategori = $this->input->post('kategori');
        $subkategori = $this->input->post('subkategori');
        $laporan = $this->input->post('isi');

        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->upload->initialize($config);

        $this->upload->do_upload('foto');
        $uploaded_data = $this->upload->data('file_name');

        $data = array(
            'nik' => $user['nik'],
            'id_kategori' => $kategori,
            'id_subkategori' => $subkategori,
            'tgl_pengaduan' => date('Y-m-d'),
            'isi_laporan' => $laporan,
            'foto' => $uploaded_data,
        );

        $this->mdl_Home->insertpengaduan($data);
        $this->session->set_flashdata('pengaduan', '<div class="alert alert-success" role="alert"> Berhasil ditambahkan! </div>');
        redirect('pengaduan');
    }
    public function get_sub_kategori()
    {
        $id_kategori = $this->input->post('id');
        $sub_kategori = $this->mdl_Home->get_sub_kategori($id_kategori);
        echo json_encode($sub_kategori);
    }
}
