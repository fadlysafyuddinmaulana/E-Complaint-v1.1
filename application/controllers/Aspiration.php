<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspiration extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Complaint';

        $this->load->view('Page-Layout/Aspiration-Layout/Header', $data);
        $this->load->view('Starter-Page/Aspiration-Page', $data);
        $this->load->view('Page-Layout/Aspiration-Layout/Footer', $data);
    }

    public function Proses_Aspiration()
    {


        $nim        = $this->input->post('nim');
        $cek_nim    = $this->m_Sql->check_nim($nim);
        $keluhan    = $this->input->post('keluhan');
        $saran      = $this->input->post('saran');

        if ($cek_nim->num_rows() > 0) {
            date_default_timezone_get('Asia/Jakarta');
            $Date = date('dmy');
            $Time = date('His');
            $rename_file                 = 'Bukti Keluhan ' . '-' . $nim . '-' . $Date . '-' . $Time . '-' . $_FILES['foto']['name'];
            $config['file_name']         = $rename_file;
            $config['allowed_types']     = 'png|jpeg|jpg';
            $config['upload_path']       = './image/upload-complaint/';

            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!empty($_FILES['foto']['name'])) {
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data();
                    $data = array(
                        'NIM'       => $nim,
                        'Keluhan'   => $keluhan,
                        'Saran'     => $saran,
                        'File'      => $rename_file
                    );
                    $this->M_Sql->insert_record($data, 'tb_log_complaint');
                    redirect('');
                } else {
                    $data = array();
                }
            } else {
                # code...
            }
        } else {
            # code...
        }
    }
}
