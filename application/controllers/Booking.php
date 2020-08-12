<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function index()
    {
        $data['allantrian'] = $this->db->get('kendaraan')->result_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['antrian'] = $this->db->get('kendaraan')->result_array();
        $data['jumlah'] = $this->db->get('kendaraan')->num_rows();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('antrian', $data);
        $this->load->view('templates/footer', $data);
    }
}
