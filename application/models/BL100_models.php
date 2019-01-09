<?php

/**
 * @author: Toailq - 09/01/2019
 * @model: bl100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class BL100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function bl2018_insert_comment($data){
        $sql = "INSERT INTO BL100 (BV100, TK100, TK151, BL150, BL152, BL153, BL154, BL155) 
        VALUES (" . $data["BV100"] . "," . $data["TK100"] . ",'" . $data["TK151"] . "','" . $data["BL150"] . 
        "','" . $data["BL152"] . "','" . $data["BL153"] . "','" . $data["BL154"] . "','" . $data["BL155"] . "')";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
    public function bl2018_get_comment($data){
        if ($data['BV100'] == 0 ) {
            $sql =  "SELECT * FROM BL100 ORDER BY BL151 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        } else {
            $sql =  "SELECT * FROM BL100 WHERE BV100 = '" .$data["BV100"]. "' ORDER BY BL151 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        }
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    private function bl2018_update_comment($data) {
        $sql = "UPDATE BL100 SET BL155 ='" . $data["BL151"] . "'WHERE BL100 =" . $data["BL100"];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function bl2018_get_question_for_user($data){
        $sql =  "SELECT * FROM BL100 WHERE BV100 = '" .$data["BV100"]. "' AND BL155 = 0 ORDER BY BL152 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        // die(json_encode($sql));
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }
}
