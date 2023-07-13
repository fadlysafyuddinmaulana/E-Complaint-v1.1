<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function proses_admin()
    {
        $u          = $this->input->post('username');
        $p          = md5($this->input->post('password'));
        $cek        = $this->M_Sql->check_petugas($u, $p);

        if ($cek->num_rows() > 0) {
            $user_data                  = $cek->row_array();
            $session['id_admin']        = $user_data['id_admin'];
            $session['nama_petugas']    = $user_data['nama_petugas'];
            $session['username']        = $user_data['username'];
            $session['password']        = $user_data['password'];

            $this->session->set_userdata('server_session', $session);
            redirect('dashboard');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Starter_Page/admin');
    }
}
