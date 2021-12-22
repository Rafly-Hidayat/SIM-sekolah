<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Mahasiswa | Dashboard';
        $this->load->view('overview', $data);
    }
}
