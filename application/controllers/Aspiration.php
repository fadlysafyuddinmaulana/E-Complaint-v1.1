<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspiration extends CI_Controller
{
    public function Index()
    {
        $this->load->view('');
    }

    public function Proses_Aspiration()
    {
        $nim = $this->input->post('nim');
        $cek_nim = $this->m_Sql->check_nim($nim);

        if ($cek_nim->num_rows() > 0) {
            # code...
        } else {
            # code...
        }
    }
}
