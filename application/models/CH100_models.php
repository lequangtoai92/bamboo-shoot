<?php

/**
 * @author: Toailq - 09/01/2019
 * @model: ch100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class CH100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function ch2018_insert_question($data){
        $sql = "INSERT INTO CH100 (BV100, CH150, CH151, CH152) 
        VALUES (" . $data["BV100"] . ",'" . $data["CH150"] . ",'" . $data["CH151"] . 
        "','" . $data["CH152"] . "')";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
    public function ch2018_get_question($data){
        if ($data['BV100'] == 0 ) {
            $sql =  "SELECT * FROM CH100 ORDER BY CH153 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        } else {
            $sql =  "SELECT * FROM CH100 WHERE BV100 = '" .$data["BV100"]. "' ORDER BY CH153 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        }
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    private function ch2018_update_question($data) {
        $sql = "UPDATE CH100 SET CH152 ='" . $data["CH152"] . "'WHERE CH100 =" . $data["CH100"];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function ch2018_get_question_for_user($data){
        $sql =  "SELECT * FROM CH100 WHERE BV100 = '" .$data["BV100"]. "' AND CH152 = 0 ORDER BY CH153 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }
}
