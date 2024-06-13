<?php
class Model_laporan extends CI_Model {
    public function getData($table) {
        $query = "SELECT * FROM " . $table;
        return $this->db->query($query);
    }

    public function addData($table, $array){
        return $this->db->insert($table, $array);
    }

    public function getDataWithadd($table, $id){
        $query = "SELECT * FROM " . $table . " WHERE id_laporantendik =". $additional;
        return $this->db->query($query);
    }

    public function getDataWithId($table, $id){
        $query = "SELECT * FROM " . $table . " WHERE id_laporantendik =".$id;
        return $this->db->query($query);
    }
    public function getDataWithIdUser($table, $id_user){
        $query = "SELECT * FROM " . $table . " WHERE id_user =".$id_user;
        return $this->db->query($query);
    }

    public function updatedata($table, $array, $where)
    {
        $this->db->where($where);
        return $this->db->update($table, $array);
    }

    public function deletedata($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}