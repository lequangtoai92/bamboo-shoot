<?php

/**
 * @author: Toailq - 22/11/2018
 * @model: A100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class A100_models extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function a2018_get_account($data){
        $sql = "SELECT * FROM TK100 WHERE TK100=" . $data['TK100'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function a2018_update_account($data) {
        $sql = "UPDATE TK100 
                SET TK151 =" . $data['TK151'] . "," .
                    "TK152 =" . $data['TK152'] . "," .
                    "TK153 =" . $data['TK153'] . "," .
                    "TK154 =" . $data['TK154'] . "," .
                    "TK155 =" . $data['TK155'] . "," .
                    "TK156 =" . $data['TK156'] . "," .
                    "TK157 =" . $data['TK157'] . "," .
                    "TK159 =" . $data['TK159'] .
                "WHERE TK100 =" . $data['TK100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_update_pass($data) {
        $sql = "UPDATE LI100 SET LI151 =" . $data['LI151'] . "WHERE LI100 =" . $data['LI100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_get_messenger(){
        $sql = "SELECT * FROM TN100 WHERE TK101=" . $data['TK100'] . " OR TK102=" . $data['TK100'] . "ORDER BY TN151 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function a2018_get_notifiction(){
        $sql = "SELECT * FROM TB100 WHERE TK100=" . $data['TK100'] . "ORDER BY TB151 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function a2018_update_notifiction($data) {
        $sql = "UPDATE TB100 SET TB152 =" . $data['TB152'] . "WHERE TB100 =" . $data['TB100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_send_messenger(){
        $sql = "INSERT INTO TN100 (TK101, TK102, TN150) VALUES ('" . $data["TK101"] . "','" . $data["TK102"] . "','" . $data["TN150"] . "')";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_updateKD100($data) {
        $sql = "UPDATE KD100 SET KD150 ='" . $data["KD150"] . "' WHERE KD100 =" . $data['KD100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
}
