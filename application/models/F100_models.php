<?php

/**
 * @author: Toailq - 22/11/2018
 * @model: f100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class F100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function f2018_insert_feedback($data){
        $this->db->insert('F100', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        }else{
            return -1;
        }
    }
// $this->db->order_by("FD151", "DESC");
    public function f2018_get_feedback($data){
        $this->db->select('*');
        $this->db->from('F100');
        $this->db->order_by("FD151", "DESC");
        $this->db->limit($data['LIMIT'], $data['START']);
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            // echo json_encode($result);
            return $result;
        } else {
            return false;
        }
    }
}