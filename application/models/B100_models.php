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
        // $this->db->insert('BV100', $data);
        // if ($this->db->affected_rows() > 0) {
        //     return 1;
        // }else{
        //     return -1;
        // }
        $sql = "INSERT INTO BV100 (TK100, BV150, BV151, BV152, BV153, BV154, BV156, BV157, BV158) 
                VALUES ('" . $data["TK100"] . "','" . $data["BV150"] . "','" . $data["BV151"] . "','" . $data["BV152"] .
            "','" . $data["BV153"] . "','" . $data["BV154"] . "','" . $data["BV156"] . "','" . $data["BV157"] .
            "','" . $data["BV158"] ."')";
            // die(json_encode($sql));
        if ($this->db->query($sql) === TRUE) {
            // $this->n2018_insert_content($data);
            return $this->n2018_insert_content($data);
        }else{
            return -1;
        }
    }

    private function n2018_insert_content($data){
        $sql = "INSERT INTO ND100 (ND150) VALUES ('" . $data["ND150"] . "')";
        if ($this->db->query($sql) === TRUE) {
            $this->d2018_creat_table();
            return 1;
        }else{
            return -1;
        }
    }
    private function d2018_creat_table(){
        $sql_creat_assess = "INSERT INTO DG100 (DG150, DG151, DG152, DG153, DG154, DG155, DG156) 
                                VALUES (0, '', 0, '', 0, 0, '')";
        $this->db->query($sql_creat_assess);
        $sql_creat_censor = "INSERT INTO KD100 (TK100, KD150) VALUES (0, 0)";
        $this->db->query($sql_creat_censor);
    }

    //lay tat ca truyen
    public function b2018_listOfTabBV100($data){
        $sql = "SELECT * FROM BV100 ORDER BY BV155 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    // lay truyen
    public function n2018_get_bambo($data){
        $sql = "SELECT * FROM BV100 WHERE BV100=" . $data['BV100'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    // lay noi dung truyen
    public function n2018_get_content($data){
        $sql = "SELECT * FROM ND100 WHERE ND100=" . $data['BV100'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function n2018_update_bambo($data){
        $sql = "UPDATE ND100 
                SET BV150 =" . $data['BV150'] . "," .
                    "BV151 =" . $data['BV151'] . "," .
                    "BV152 =" . $data['BV152'] . "," .
                    "BV153 =" . $data['BV153'] . "," .
                    "BV154 =" . $data['BV154'] . "," .
                    "BV156 =" . $data['BV156'] . "," .
                    "BV157 =" . $data['BV157'] . "," .
                    "BV158 =" . $data['BV158'] .
                "WHERE BV100 =" . $data['BV100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
            // return n2018_update_content($data);
        }else{
            return -1;
        }
    }

    private function n2018_update_content($data) {
        $sql = "UPDATE BV100 
                SET ND150 =" . $data['ND150'] .
                "WHERE BV100 =" . $data['BV100'];
        if ($this->db->query($sql) === TRUE) {
            return 1;
        }else{
            return -1;
        }
    }
    // lay danh sach theo ca nhan
    public function b2018_listOfAcount($data){
        $sql = "SELECT * FROM BV100 WHERE TK100=" . $data['TK100'] . "ORDER BY BV155 DESC Orders LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function b2018_listOfTabSaga($data){
        $sql = "SELECT * FROM CT100 ORDER BY CT156 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function b2018_listOfTabTopic($data){
        $sql = "SELECT * FROM BV100 WHERE BV151 = " . $data['BV151'] . " ORDER BY BV155 DESC LIMIT " . $data['LIMIT'] . " OFFSET " . $data['START'];
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function b2018_listAll($data){
        $sql = "SELECT * FROM BV100 , ND100, GY100
            ORDER BY BV155 DESC LIMIT" . $data['LIMIT'] . " OFFSET " . $data['START'];
    }

}