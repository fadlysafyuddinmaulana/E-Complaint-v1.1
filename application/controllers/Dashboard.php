<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function Index()
    {
        $data['title'] = 'Complaint Box';

        $this->load->view('Page-Layout/Dashboard-Layout/Header', $data);
        $this->load->view('Page-Layout/Dashboard-Layout/Sidebar', $data);
        $this->load->view('Dashboard/Index', $data);
        $this->load->view('Page-Layout/Dashboard-Layout/Footer', $data);
    }
}
