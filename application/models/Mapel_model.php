<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel_model extends CI_Model
{
    private $table = 'mapel';

    public function getAll()
    {
        $sql = "SELECT * FROM mapel WHERE kd_mapel != 'm000'";
        return $this->db->query($sql)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["kd_mapel" => $id])->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('kd_mapel' => $id));
    }

    public function delete($id)
    {
        // $sql = "DELETE mapel , dosen FROM mapel , dosen WHERE mapel.kd_mapel = dosen.kd_mapel AND mapel.kd_mapel = ?";
        // return $this->db->query($sql, array($id));
        $sql = "UPDATE dosen SET kd_mapel = 'm000' WHERE dosen.kd_mapel = ?";
        $this->db->query($sql, array($id));
        return $this->db->delete($this->table, array('kd_mapel' => $id));
    }
}
