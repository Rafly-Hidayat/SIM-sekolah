<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
	private $table = 'siswa';

	public function getAll()
    {
		$sql = "SELECT nis, nama_siswa, nama_jurusan FROM siswa INNER JOIN jurusan ON siswa.kd_jurusan = jurusan.kd_jurusan";
		return $this->db->query($sql)->result();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->table, ['nis' => $id])->row();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('nis' => $id));
    }

	public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getJurusan(){
    	$sql = "SELECT * from jurusan";
    	return $this->db->query($sql)->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array('nis' => $id));
    }
}