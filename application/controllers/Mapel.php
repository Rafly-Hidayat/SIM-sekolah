<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mapel_model");
        $this->load->library("form_validation");
    }

    public function index()
    {
        $data['mapels'] = $this->mapel_model->getAll();
        $data['title'] = 'Mapel | List';
        $this->load->view('mapel/list', $data);
    }

    public function create()
    {
        $data['title'] = 'Mapel | Create';
        $this->load->view('mapel/create', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('kd_mapel', 'Kode mapel', 'required|is_unique[mapel.kd_mapel]');
        $this->form_validation->set_rules('nama_mapel', 'Nama mapel', 'required');

        if ($this->form_validation->run() == true) {
            $data['nama_mapel'] = $this->input->post('nama_mapel');
            $data['kd_mapel'] = $this->input->post('kd_mapel');
            $this->mapel_model->save($data);
            $this->session->set_flashdata('success', 'Data berhasil di simpan');
            redirect('mapel');
        } else {
            $this->load->view('mapel/create');
        }
    }

    public function edit($kd_mapel)
    {
        $data['title'] = "Mapel | Edit";
        $data['mapel'] = $this->mapel_model->getById($kd_mapel);
        $this->load->view('mapel/edit', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'required');
        $this->form_validation->set_rules('kd_mapel', 'Kode mapel', 'required');

        if ($this->form_validation->run() == true) {
            $kd_mapel = $this->input->post('kode');
            $data['kd_mapel'] = $this->input->post('kd_mapel');
            $data['nama_mapel'] = $this->input->post('nama_mapel');
            $this->mapel_model->update($data, $kd_mapel);
            $this->session->set_flashdata('success', 'Data berhasil di ubah');
            redirect('mapel');
        } else {
            $kd_mapel = $this->input->post('kode');
            $data['mapel'] = $this->mapel_model->getById($kd_mapel);
            $this->load->view('mapel/edit', $data);
        }
    }

    public function delete($kd_mapel)
    {
        $this->mapel_model->delete($kd_mapel);
        $this->session->set_flashdata('success', '<span class="text-danger">
        Data berhasil di hapus
        </span>');
        redirect('mapel');
    }
}
