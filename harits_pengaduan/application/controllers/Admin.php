<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('mdl_Home');
    }

    public function index()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['bar_graph'] = $this->mdl_Home->graph_card_admin();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template/footer');
    }

    //setup admin
    public function setup()
    {
        $cek = $this->mdl_Home->cekpetugas();

        if ($cek == 0) {
            redirect('adminsetup2');
        } else {
            $this->log();
        }
    }
    public function setup2()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('telp', 'Telp', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('authadmin/setup');
        } else {
            $data = [
                'nama_petugas' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'telp' => htmlspecialchars($this->input->post('telp')),
                'level' => 'admin'
            ];

            $this->mdl_Home->setupapp($data);
            $this->session->set_flashdata('setup', '<div class="alert alert-success" role="alert"> Setup Berhasil! </div>');
            redirect('adminlog');
            // $this->setup3();
        }
    }

    //auth
    public function log()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('authadmin/login');
        } else {
            $this->login();
        }
    }
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user     = $this->mdl_Home->loginadmin($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'nama_petugas' => $user['nama_petugas'],
                    'level'    => $user['level']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'admin') {
                    redirect('adminhome');
                } else if ($user['level'] == 'petugas') {
                    redirect('petugas');
                } else if ($user['level'] == 'ban') {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> user di banned! </div>');
                    redirect('adminlog');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> password salah! </div>');
                redirect('adminlog');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username tidak ditemukan! </div>');
            redirect('adminlog');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required');
        $this->form_validation->set_rules('level', 'Level', 'trim|required');

        $data = [
            'nama_petugas' => htmlspecialchars($this->input->post('nama')),
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'telp' => htmlspecialchars($this->input->post('telepon')),
            'level' => htmlspecialchars($this->input->post('level'))
        ];

        $this->mdl_Home->tambahpetugas($data);
        $this->session->set_flashdata('petugas', '<div class="alert alert-success" role="alert"> Berhasil ditambahkan! </div>');
        redirect('adminpetugas');
    }


    // kategori
    public function kategori()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['kategori'] = $this->mdl_Home->tampilkategori()->result_array();
        $data['subkategori'] = $this->mdl_Home->tampilsubkat()->result_array();
        $data['kategori_join'] = $this->mdl_Home->joinsubkat()->result_array();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/kategori', $data);
        $this->load->view('admin/template/footer');
    }
    public function insertkategori()
    {
        $data = [
            'kategori' => $this->input->post('kategori')
        ];

        $this->mdl_Home->insertkategori($data);
        $this->session->set_flashdata('kategori', '<div class="alert alert-success" role="alert"> Data berhasil Ditambahkan! </div>');
        redirect('adminkategori');
    }
    public function editkategori($id)
    {
        $data = [
            'kategori' => $this->input->post('kategori')
        ];

        $this->mdl_Home->editkategori($id, $data);
        $this->session->set_flashdata('kategori', '<div class="alert alert-success" role="alert"> Data berhasil Diupdate! </div>');
        redirect('adminkategori');
    }
    public function delkategori($id)
    {
        $this->mdl_Home->delkategori($id);
        $this->session->set_flashdata('kategori', '<div class="alert alert-success" role="alert"> Data berhasil dihapus! </div>');
        redirect('adminkategori');
    }
    //sub kategori
    public function insertsubkat()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $kategori_data = $this->mdl_Home->kategori();

        $data = [
            'id_kategori' => $kategori_data['id_kategori'],
            'subkategori' => $this->input->post('subkategori')
        ];


        $this->mdl_Home->insertsubkat($data);
        $this->mdl_Home->joinsubkat()->result_array();
        $this->session->set_flashdata('subkat', '<div class="alert alert-success" role="alert" > Data berhasil ditambahkan!</div>');
        redirect('adminkategori');
    }
    public function editsubkat($id)
    {
        $data = [
            'id_kategori' => $this->input->post('kategori'),
            'subkategori' => $this->input->post('subkategori')
        ];

        $this->mdl_Home->joineditsubkat($id, $data);
        $this->session->set_flashdata('subkat', '<div class="alert alert-success" role="alert"> Data berhasil diupdate! </div>');
        redirect('adminkategori');
    }
    public function delsubkategori($id)
    {
        $this->mdl_Home->delsubkategori($id);
        $this->session->set_flashdata('subkat', '<div class="alert alert-success" role="alert"> Data berhasil dihapus! </div>');
        redirect('adminkategori');
    }

    // masyarakat
    public function masyarakat()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['masyarakat'] = $this->mdl_Home->masyarakat();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/masyarakat', $data);
        $this->load->view('admin/template/footer');
    }
    public function editmasyarakat($id)
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'active' => 'aktif',
        ];

        $this->mdl_Home->editmasyarakat($data, $id);
        $this->session->set_flashdata('masyarakat', '<div class="alert alert-success" role="alert"> Data berhasil diupdate! </div>');
        redirect('adminmasyarakat');
    }
    public function delmasyarakat($id)
    {
        $this->mdl_Home->delmasyarakat($id);
        $this->session->set_flashdata('masyarakat', '<div class="alert alert-success" role="alert"> Data berhasil dihapus! </div>');
        redirect('adminmasyarakat');
    }

    public function banmasyarakat($id)
    {
        $data = [
            'active' => 'nonaktif'
        ];

        $this->mdl_Home->banmasyarakat($id, $data);
        $this->session->set_flashdata('masyarakat', '<div class="alert alert-success" role="alert"> User berhasil di banned! </div>');
        redirect('adminmasyarakat');
    }

    // petugas
    public function petugas()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['petugas'] = $this->mdl_Home->tampilpetugas();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/petugas', $data);
        $this->load->view('admin/template/footer');
    }
    public function delpetugas($id)
    {
        $this->mdl_Home->delpetugas($id);
        $this->session->set_flashdata('petugas', '<div class="alert alert-success" role="alert"> Data berhasil dihapus! </div>');
        redirect('adminpetugas');
    }
    public function banpetugas($id)
    {
        $data = [
            'level' => 'ban'
        ];

        $this->mdl_Home->banpetugas($id, $data);
        $this->session->set_flashdata('petugas', '<div class="alert alert-success" role="alert"> User berhasil diban! </div>');
        redirect('adminpetugas');
    }
    public function editpetugas($id)
    {
        $data = [
            'nama_petugas' => htmlspecialchars($this->input->post('nama')),
            'telp' => htmlspecialchars($this->input->post('telepon')),
            'level' => htmlspecialchars($this->input->post('level'))
        ];

        $this->mdl_Home->editpetugas($data, $id);
        $this->session->set_flashdata('petugas', '<div class="alert alert-success" role="alert"> Data berhasil diupdate! </div>');
        redirect('adminpetugas');
    }

    // pengaduan
    public function pengaduan()
    {
        if(!$this->session->userdata('username')) {
            redirect('login');
        }

        $data['joinpengaduan'] = $this->mdl_Home->joinpengaduandata2()->result_array();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/pengaduan', $data);
        $this->load->view('admin/template/footer');
    }
    public function tindakanpengaduan($id)
    {
        $data['pengaduan'] = $this->mdl_Home->joinpengaduan2($id)->result_array();
        $data['tanggapan'] = $this->mdl_Home->tambahpengaduan($id)->result_array();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/template/topbar');
        $this->load->view('admin/tindakanpengaduan', $data);
        $this->load->view('admin/template/footer');
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
        redirect('adminpengaduan');
    }

    public function laporan_pdf()
    {
        $data['masyarakat'] = $this->mdl_Home->masyarakat();
		$data['petugas'] = $this->mdl_Home->tampilpetugas();
        $pengaduan = $this->mdl_Home->joinpengaduandata2()->result_array();

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            ),
            'pengaduan' => $pengaduan
        );
    
        $this->load->library('pdf');
        $data['title'] = 'Laporan Pengaduan';
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-ppm.pdf";
        $this->pdf->load_view('admin/laporan_pdf', $data);
    
    
    }
}
