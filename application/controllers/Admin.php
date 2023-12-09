<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // cek login
        if ($this->session->userdata('status') != "login") {
            redirect(base_url() . 'welcome?pesan=belumlogin');
        }
    }
    function index()
    {
        // $data['transaksi'] = $this->db->query("select * from transaksi order by transaksi_id desc limit 10")->result();

        // $data['kostumer'] = $this->db->query("select * from kostumer order by kostumer_id desc limit 10")->result();

        // $data['mobil'] = $this->db->query("select * from mobil order by mobil_id desc limit 10")->result();

        // $data['count_rows'] = $this->m_rental->get_count('mobil')->count_all_results();
        $this->load->view('admin/asidenav');
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    function mobil()
    {
        $data['mobil'] = $this->m_rental->get_data('mobil')->result();
        $this->load->view('admin/asidenav');
        $this->load->view('admin/header');
        $this->load->view('admin/mobil', $data);
        $this->load->view('admin/footer');
    }

    function kostumer()
    {
        $data['kostumer'] = $this->m_rental->get_data('kostumer')->result();
        $data['background'] = "red";
        $this->load->view('admin/asidenav', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/kostumer', $data);
        $this->load->view('admin/footer');
    }
}