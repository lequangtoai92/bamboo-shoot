<?php

/**
 * @author: Toailq - 2/12/2018
 * @model: b100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class B100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function f2018_insert_bambo($data){
        $this->db->insert('B100', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        }else{
            return -1;
        }
    }

    public function f2018_insert_content($data){
        $this->db->insert('C100', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        }else{
            return -1;
        }
    }
// $this->db->order_by("FD151", "DESC");
    // public function f2018_get_feedback(){
    //     $this->db->select('*');
    //     $this->db->from('F100');
    //     $this->db->order_by("FD151", "DESC");
        
    //     $query = $this->db->get();
    //     if ($query->num_rows() > 0) {
    //         $result = $query->result_array();
    //         echo json_encode($result);
    //     } else {
    //         return false;
    //     }
    // }
}