<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function Index()
    {
        $this->load->view('Page-Layout/Dashboard-Layout/Header');
        $this->load->view('Page-Layout/Dashboard-Layout/Sidebar');
        $this->load->view('Dashboard/Index');
        $this->load->view('Page-Layout/Dashboard-Layout/Footer');
    }
}
