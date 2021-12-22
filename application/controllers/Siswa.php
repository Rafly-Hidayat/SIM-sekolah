<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['siswa'] = $this->siswa_model->getAll();
        $data['title'] = 'Siswa | List';
        $this->load->view('siswa/list', $data);
    }

    public function create()
    {
        $data['title'] = 'Siswa | Create';
        $data['jurusans'] = $this->siswa_model->getJurusan();
        $this->load->view('siswa/create', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('nis', 'NIS', 'trim|required|is_unique[siswa.nis]|min_length[4]');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'trim|required');

        if ($this->form_validation->run() == true) {
            $data['nis'] = $this->input->post('nis');
            $data['nama_siswa'] = $this->input->post('nama_siswa');
            $data['kd_jurusan'] = $this->input->post('nama_jurusan');
            $this->siswa_model->save($data);
            $this->session->set_flashdata('pesan', 'Data berhasil di simpan');
            redirect('siswa');
        } else {
            $this->load->view('siswa/create');
        }
    }
    public function edit($nis)
    {
        $data['title'] = 'Siswa | Edit';
        $data['jurusans'] = $this->siswa_model->getJurusan();
        $data['siswa'] = $this->siswa_model->getById($nis);
        return $this->load->view('siswa/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nis', 'NIS', 'trim|required|min_length[4]|numeric');
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'trim|required');
        $this->form_validation->set_rules('kd_jurusan', 'Nama Jurusan', 'trim|required');

        if ($this->form_validation->run() == true) {
            $nis = $this->input->post('id');
            $data['nis'] = $this->input->post('nis');
            $data['nama_siswa'] = $this->input->post('nama_siswa');
            $data['kd_jurusan'] = $this->input->post('kd_jurusan');
            $this->siswa_model->update($data, $nis);
            $this->session->set_flashdata('pesan', 'Data berhasil di ubah');
            redirect('siswa');
        } else {
            $nis = $this->input->post('id');
            $data['siswa'] = $this->siswa_model->getById($nis);
            $this->load->view('siswa/edit', $data);
        }
    }

    public function delete($nis)
    {
        $this->siswa_model->delete($nis);
        $this->session->set_flashdata('pesan', '<span class="text-danger">
        Data berhasil di hapus
        </span>');
        redirect('siswa');
    }
}
