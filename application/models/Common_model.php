<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function get($where = array(),$table){
        $result = $this->db
        ->where($where)
        ->get($table)
        ->row();
        return $result;
    }

}

?>