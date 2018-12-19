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

    public function a2018_send_messenger(){
        $slq = "INSERT INTO TN100 (TK101, TK102, TN150) VALUES (" . $data['TK101'] . "," . $data['TK102'] . "," . $data['TN150'] . ")";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_send_notification(){
        $slq = "INSERT INTO TB100 (TK100, TB150, TB152) VALUES (" . $data['TK100'] . "," . $data['TB150'] . "," . $data['TB152'] . ")";
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
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

    public function a2018_updateKD100($data) {
        $sql = "UPDATE KD100 SET KD150 =" . $data['KD150'] . "WHERE KD100 =" . $data['KD100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_updateTK100($data) {
        $sql = "UPDATE TK100 SET TK159 =" . $data['TK159'] . "WHERE TK100 =" . $data['TK100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_updateLI100($data) {
        $sql = "UPDATE LI100 SET LI152 =" . $data['LI152'] . "WHERE LI100 =" . $data['LI150'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }

    public function a2018_listOfTopic_BV100(){
        $slq = "SELECT * FROM BV100 WHERE BV151 =" . $data['BV151'] . " ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function a2018_listOfTabTK100(){
        $slq = "SELECT * FROM TK100 ORDER BY KT158 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }
}