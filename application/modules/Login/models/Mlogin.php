<?php
   
class Mlogin extends CI_Model{

    public function cek_login($table, $where){
        $query = $this->db->get_where($table, $where);
        $row = $query->result_array();
        
        if($query->num_rows() > 0){
            return $row[0];
        }
    }
}

