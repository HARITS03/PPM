<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_Home');   

        if(!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    // dashboard
    public function index()
    {
        $data['bar_graph']=$this->mdl_Home->graph_card_admin();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/dashboard', $data);
        $this->load->view('petugas/template/footer');
    }

    // kategori and sub kategori
    public function kategori()
    {
        $data['kategori'] = $this->mdl_Home->tampilkategori()->result_array();
        $data['kategori_join']= $this->mdl_Home->joinsubkat()->result_array();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/kategori', $data);
        $this->load->view('petugas/template/footer');
    }

    //masyarakat
    public function masyarakat()
    {
        $data['masyarakat'] = $this->mdl_Home->masyarakat();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/masyarakat', $data);
        $this->load->view('petugas/template/footer');
    }

    // petugas
    public function petugas()
    {
        $data['petugas']=$this->mdl_Home->tampilpetugas();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/petugas', $data);
        $this->load->view('petugas/template/footer');
    }

    // pengaduan
    public function pengaduan()
    {
        $data['joinpengaduan'] = $this->mdl_Home->joinpengaduandata2()->result_array();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/pengaduan', $data);
        $this->load->view('petugas/template/footer');
    }

    public function tindakan_pengaduan($id)
    {
        $data['pengaduan'] = $this->mdl_Home->joinpengaduan2($id)->result_array();
        $data['tanggapan'] = $this->mdl_Home->tambahpengaduan($id)->result_array();

        $this->load->view('petugas/template/header');
        $this->load->view('petugas/template/sidebar');
        $this->load->view('petugas/template/topbar');
        $this->load->view('petugas/tindakanpengaduan', $data);
        $this->load->view('petugas/template/footer');
    }

    public function inserttindakanpengaduan($id)
    {
        $data = [
            'id_pengaduan' => $id,
            'tgl_tanggapan' => date('Y-m-d'),
            'tanggapan' => $this->input->post('tanggapan'),
            'nama_petugas' => $this->session->userdata('nama_petugas'),
        ];

        $this->mdl_Home->tambahtindakan($data);

        $update = [
            'status' => $this->input->post('status'),
        ];

        $this->mdl_Home->tambahtindakan2($update, $id);
        $this->session->set_flashdata('tindakan', '<div class="alert alert-success" role="alert"> Data berhasil di tambahkan </div>');
        redirect('petpengaduan');
    }

}