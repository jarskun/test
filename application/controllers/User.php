<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __consruct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('email')) {
            redirect(base_url('auth'));
        }
    }
    public function index()
    {
        $data['jmlantrian'] = $this->db->get('kendaraan')->num_rows();
        $data['jmluser'] = $this->db->get('user')->num_rows();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allUser'] = $this->db->get('boking')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function booking()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // // join table
        // $this->db->select('kendaraan.id,kendaraan.sim, kendaraan.stnk, kendaraan.bpkb, nama, nama_merek, ');
        // $this->db->from('kendaraan');
        // $this->db->join('kategori', 'kategori.id=kendaraan.id_kategori');
        // $this->db->join('merek', 'merek.id=kendaraan.id_merek');
        // $this->db->where('user_id', $data['user']['id']);
        // $data['kendaraan'] = $this->db->get()->result_array();

        $data['allUser'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/booking', $data);
        $this->load->view('templates/footer', $data);
    }

    public function transaksi()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->select('*');
        $this->db->from('kendaraan');
        $this->db->join('kategori', 'kategori.id = kendaraan.id_kategori');
        $this->db->where('user_id', $data['user']['id']);
        $data['kendaraan'] = $this->db->get()->row_array();
        $data['harga'] = $this->db->get_where('kendaraan');
        $data['allUser'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/transaksi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        redirect(base_url('data'));
    }


    public function propil()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['allUser'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/propil', $data);
        $this->load->view('templates/footer', $data);
    }
    public function editRole()
    {
        $role = $this->input->post('role');
        $id = $this->input->post('id');
        $this->db->set('role', $role);
        $this->db->where('id', $id);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Anda berhasil Mengedit role
           </div>');
        redirect(base_url('user/data'));
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        selamat anda berhasil keluar :)
       </div>');
        redirect(base_url('home'));
    }
}
