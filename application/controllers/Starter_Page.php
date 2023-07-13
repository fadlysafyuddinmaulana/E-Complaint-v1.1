<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Starter_Page extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Complaint Box';

        $this->load->view('Page-Layout/Aspiration-Layout/Header', $data);
        $this->load->view('Starter-Page/Aspiration-Page', $data);
        $this->load->view('Page-Layout/Aspiration-Layout/Footer', $data);
    }

    public function admin()
    {
        $data['title'] = 'Complaint Box';

        $this->load->view('Page-Layout/Aspiration-Layout/Header', $data);
        $this->load->view('Starter-Page/Admin-Page', $data);
        $this->load->view('Page-Layout/Aspiration-Layout/Footer', $data);
    }
}
