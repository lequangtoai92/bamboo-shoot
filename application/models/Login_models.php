<?php

/**
 * @author: Toailq - 22/11/2018
 * @model: c150_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

// require_once(APPPATH . 'models/Login_models.php');

class Login_models extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function registration_insert($data)
    {
        // $sql_check_account = "SELECT * FROM LI100 WHERE LI150 = '" . $data["LI150"] . " Orders LIMIT 1";
        $sql_check_account = "SELECT * FROM LI100 WHERE LI150 = '" . $data["LI150"] . "'";
        $query = $this->db->query($sql_check_account);
        if ($query->num_rows() == 0) {
            $sql = "INSERT INTO LI100 (LI150, LI151, LI152) VALUES ('" . $data["LI150"] . "','" . $data["LI151"] . "','" . $data["LI152"] . "')";
            if ($this->db->query($sql) === true) {
                $this->db->query("UPDATE LI100 SET TK100 = LI100 ORDER BY LI100 DESC LIMIT 1");
                // $sql = "UPDATE LI100 SET TK100 = 5 WHERE LI100 ORDER BY LI100 DESC LIMIT 1";
                return 1;
            }
        } else {
            return -1;
        }
    }

    public function registration_insert_infoUser($data)
    {
        $sql = "INSERT INTO TK100 (TK151, TK152, TK153, TK154, TK155, TK156, TK157, TK159)
        VALUES ('" . $data["TK151"] . "','" . $data["TK152"] . "','" . $data["TK153"] . "','" . $data["TK154"] .
            "','" . $data["TK155"] . "','" . $data["TK156"] . "','" . $data["TK157"] . "','" . $data["TK159"] . "')";
        if ($this->db->query($sql) === true) {
            return 1;
        } else {
            return -1;
        }
    }

    // Read data using username and password
    public function login($data)
    {
        // $sql = "SELECT * FROM LI100 WHERE LI150 = '" . $data["LI150"] . "' AND LI151 = " . $data["LI151"] . "' Orders LIMIT 1";
        $sql = "SELECT * FROM LI100 WHERE LI150 = '" . $data["LI150"] . "' AND LI151 = '" . $data["LI151"] . "' ORDER BY LI100 DESC LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    public function get_infor_user($id)
    {
        $sql = "SELECT * FROM TK100 WHERE TK100 = '" . $id . "' ORDER BY TK100 DESC LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }
}
