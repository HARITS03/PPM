<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mdl_Home extends CI_Model
{
    //----------------------------------------------------------------------------------------------    
    //ADMIN
    //----------------------------------------------------------------------------------------------

    //setup app
    function cekpetugas()
    {
        return $this->db->get('petugas')->num_rows();
    }
    function setupapp($data)
    {
        return $this->db->insert('petugas', $data);
    }

    //auth
    function loginadmin($username)
    {
        return $this->db->get_where('petugas', ['username' => $username])->row_array();
    }

    //kategori
    function kategori()
    {
        return $this->db->get_where('kategori', ['kategori' => $this->input->post('kategori')])->row_array();
    }
    function tampilkategori()
    {
        return $this->db->get('kategori');
    }
    function insertkategori($data)
    {
        $this->db->insert('kategori', $data);
    }
    function editkategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        $this->db->update('kategori', $data);
    }
    function delkategori($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    //subkat
    function tampilsubkat()
    {
        return $this->db->get('subkategori');
    }
    function insertsubkat($data)
    {
        $this->db->insert('subkategori', $data);
    }
    function joineditsubkat($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id_subkategori', $id);
        $this->db->update('subkategori', $data);
    }
    function delsubkategori($id)
    {
        $this->db->where('id_subkategori', $id);
        $this->db->delete('subkategori');
    }
    function joinsubkat()
    {
        $this->db->select('*');
        $this->db->from('subkategori');
        $this->db->join('kategori', 'kategori.id_kategori=subkategori.id_kategori');
        return $this->db->get();
    }

    //masyarakat
    function masyarakat()
    {
        return $this->db->get('masyarakat')->result_array();
    }
    function editmasyarakat($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('masyarakat', $data);
    }
    function delmasyarakat($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('masyarakat');
    }
    function banmasyarakat($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('masyarakat', $data);
    }
    function joinmaspeng() // pengaduan -> masyarakat
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        return $this->db->get();
    }

    //petugas
    function tampilpetugas()
    {
        return $this->db->get('petugas')->result_array();
    }
    function tambahpetugas($data)
    {
        $this->db->insert('petugas', $data);
    }
    function editpetugas($data, $id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
    }
    function delpetugas($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('petugas');
    }
    function banpetugas($id, $data)
    {
        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
    }

    //pengaduan 
    function pengaduan()
    {
        return $this->db->get('pengaduan');
    }
    function joinpengaduandata($nik)
    {

        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('kategori', 'kategori.id_kategori=pengaduan.id_kategori');
        $this->db->join('subkategori', 'subkategori.id_subkategori=pengaduan.id_subkategori');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        $this->db->where('pengaduan.nik', $nik);
        return $this->db->get();
    }
    function joinpengaduandata2()
    {

        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('kategori', 'kategori.id_kategori=pengaduan.id_kategori');
        $this->db->join('subkategori', 'subkategori.id_subkategori=pengaduan.id_subkategori');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        return $this->db->get();
    }
    function tambahpengaduan($id)
    {
        $this->db->select('*');
        $this->db->from('tanggapan');
        $this->db->join('pengaduan', 'pengaduan.id_pengaduan=tanggapan.id_pengaduan');
        $this->db->join('petugas', 'petugas.nama_petugas=tanggapan.nama_petugas');
        $this->db->where('pengaduan.id_pengaduan', $id);
        return $this->db->get();
    }
    function tambahtindakan($data)
    {
        $this->db->insert('tanggapan', $data);
    }
    function tambahtindakan2($update, $id)
    {
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan', $update);
    }
    // function cek_status($status)
    // {
    //     return $this->db->get_where('pengaduan')->result_array();
    // }
    // function get_idpengaduan($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('pengaduan');
    //     $this->db->where('id_pengaduan', $id);
    //     return $this->db->get();
    // }
    // function menanggapi($username)
    // {
    //     return $this->db->get_where('petugas', ['username' => $username]);
    // }





 





    // -------------------------------------------------------------------------------------------------------------
    // masyarakat
    // -------------------------------------------------------------------------------------------------------------

    //auth masyarakat
    function insertloginuser($data)
    {
        $this->db->insert('masyarakat', $data);
    }
    function login($username)
    {
        return $this->db->get_where('masyarakat', ['username' => $username])->row_array();
    }
    function get_user()
    {
        return $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
    }
    function get_sub_kategori($id_kategori)
    {
        return $this->db->get_where('subkategori', ['id_kategori' => $id_kategori])->result();
    }
    function get_profil()
    {
        return $this->db->get_where('masyarakat', ['username'=> $this->session->userdata('username')])->row_array();
    }
    function editprofil($data, $nik)
    {
        $this->db->where('nik', $nik);
        $this->db->update('masyarakat', $data);
    }
    function graph_card_admin()
    {
        $kondisi_pengaduan=array(
            'status' => 'segera'
        );
        $this->db->where($kondisi_pengaduan);
        $jumlah_pengaduan=$this->db->get('pengaduan')->num_rows();

        $kondisi_proses=array(
            'status' => 'proses'
        );
        $this->db->where($kondisi_proses);
        $jumlah_proses=$this->db->get('pengaduan')->num_rows();

        $kondisi_selesai=array(
            'status' => 'selesai'
        );
        $this->db->where($kondisi_selesai);
        $jumlah_selesai=$this->db->get('pengaduan')->num_rows();

        $bar_graph=array(
            'jumlah_laporan'=>$this->db->get('pengaduan')->num_rows(),
            'jumlah_pengaduan'=>$jumlah_pengaduan,
            'jumlah_proses'=>$jumlah_proses,
            'jumlah_selesai'=>$jumlah_selesai
        );
        return $bar_graph;
    }
    function graph_card_masyarakat()
    {
        $kondisi_pengaduan=array(
            'status' => 'segera',
            'nik' => $this->session->userdata('nik')
        );
        $this->db->where($kondisi_pengaduan);
        $jumlah_pengaduan=$this->db->get('pengaduan')->num_rows();

        $kondisi_proses=array(
            'status' => 'proses',
            'nik' => $this->session->userdata('nik')
        );
        $this->db->where($kondisi_proses);
        $jumlah_proses=$this->db->get('pengaduan')->num_rows();

        $kondisi_selesai=array(
            'status' => 'selesai',
            'nik' => $this->session->userdata('nik')
        );
        $this->db->where($kondisi_selesai);
        $jumlah_selesai=$this->db->get('pengaduan')->num_rows();

        $bar_graph=array(
            'jumlah_laporan'=>$this->db->get('pengaduan')->num_rows(),
            'jumlah_pengaduan'=>$jumlah_pengaduan,
            'jumlah_proses'=>$jumlah_proses,
            'jumlah_selesai'=>$jumlah_selesai
        );
        return $bar_graph;
    }
    function insertpengaduan($data)
    {
        $this->db->insert('pengaduan', $data);
    }
    function joinpengaduan2($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('kategori', 'kategori.id_kategori=pengaduan.id_kategori');
        $this->db->join('subkategori', 'subkategori.id_subkategori=pengaduan.id_subkategori');
        $this->db->join('masyarakat', 'masyarakat.nik=pengaduan.nik');
        $this->db->where('id_pengaduan', $id);
        return $this->db->get();
    }
    function tanggapan($id)
    {
        $this->db->select('*');
        $this->db->from('pengaduan');
        $this->db->join('tanggapan', 'tanggapan.id_pengaduan=pengaduan.id_pengaduan');
        $this->db->where('pengaduan.id_pengaduan', $id);
        return $this->db->get();
    }
}
