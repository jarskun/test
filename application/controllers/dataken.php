<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dataKen extends CI_Controller
{
    public function index()
    {
        $data['merek'] = $this->db->get('merek')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/dataKen', $data);
        $this->load->view('templates/footer', $data);
    }
    public function save()
    {
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data =
            [
                'id_kategori' => $this->input->post('jenis_kendaraan'),
                'id_merek' => $this->input->post('merek_kendaraan'),
                'user_id' => $user['id'],
                'sim' => $this->input->post('sim'),
                'stnk' => $this->input->post('stnk'),
                'bpkb' => $this->input->post('bpkb'),
                'nama' => $this->input->post('nama'),
                'date' => $this->input->post('date'),
                'ket' => $this->input->post('ket'),
                'time' => $this->input->post('time')

            ];
        $this->db->insert('kendaraan', $data);
        redirect(base_url('user/antrian'));
    }
}
