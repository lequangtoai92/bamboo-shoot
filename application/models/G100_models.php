<?php

/**
 * @author: Toailq - 22/11/2018
 * @model: f100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class G100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert registration data in database
    public function f2018_insert_feedback($data){
        $sql = "INSERT INTO GY100 (TK100, GY150, GY152, GY153, GY154, GY155, GY156) 
        VALUES (" . $data["TK100"] . ",'" . $data["GY150"] . "'," . $data["GY152"] . ",'" . $data["GY153"] . 
        "','" . $data["GY154"] . "','" . $data["GY155"] . "','" . $data["GY156"] . "')";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
    public function f2018_get_feedback($data){
        $sql =  "SELECT *, (SELECT COUNT(*) FROM GY100 WHERE GY152 = '" . $data["GY152"] . "') AS ROWS FROM GY100 WHERE GY152 = '" . $data["GY152"] . "' ORDER BY GY151 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function G2018_update_feedback($data) {
        $sql = "UPDATE GY100 SET GY152 ='" . $data["GY152"] . "'WHERE GY100 =" . $data["GY100"];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
}
