<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function get($where,$table){
        $result = $this->db
        ->where($where)
        ->get($table)
        ->row();
        return $result;
    }

    public function get_all($table){
        $result = $this->db
        ->get($table)
        ->result();
        return $result;
    }

    public function insert($table,$data){
        $result = $this->db
        ->insert($table,$data);
        return $result;
    }

    public function update($id,$table,$data){
        $result = $this->db
        ->where('id',$id)
        ->update($table,$data);
        return $result;
    }


    public function delete($table,$data){
        $result = $this->db
        ->delete($table,$data);
        return $result;
    }

    public function query($query){
        $result = $this->db->query();
        return $result;
    }
}

?>