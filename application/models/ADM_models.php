<?php

/**
 * @author: Toailq - 04/12/2018
 * @model: Adm_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ADM_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function f2018_insert_saga_vn($data){
        $this->db->insert('V100', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function f2018_insert_saga_jp($data){
        $this->db->insert('J100', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function f2018_insert_grimm($data){
        $this->db->insert('G100', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }

    public function f2018_insert_greek_mythology($data){
        $this->db->insert('M100', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }
}