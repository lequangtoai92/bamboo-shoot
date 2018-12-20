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

    // Insert registration data in database
    public function registration_insert($data)
    {
        // $condition = "LI150 =" . "'" . $data['AL150'] . "'";
        // $this->db->select('*');
        // $this->db->from('LI150');
        // $this->db->where($condition);
        // $this->db->limit(1);
        // $query = $this->db->get();
        // if ($query->num_rows() == 0) {
        //     $this->db->insert('A150', $data);
        //     if ($this->db->affected_rows() > 0) {
        //         return true;
        //     }
        // } else {
        //     return false;
        // }
        $sql_check_account = "SELECT * FROM LI100 WHERE LI150=" . $data['LI150'] . " Orders LIMIT 1";
        $query = $this->db->query($sql_check_account);
        if ($query->num_rows() == 0) {
            $sql = "INSERT INTO LI100 (LI150, LI151, LI152) VALUES ('" . $data["LI150"] . "','" . $data["LI151"] . "','" . $data["LI152"] . "')";
            if ($this->db->query($sql) === true) {
                return 1;
            }
        } else {
            return -1;
        }
    }

    public function registration_insert_infoUser($data)
    {
        // $this->db->insert('A100', $data);
        // if ($this->db->affected_rows() > 0) {
        //     return true;
        // }else{
        //     return false;
        // }
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
        // $condition = "AL150 =" . "'" . $data['AL150'] . "' AND " . "AL200 =" . "'" . $data['AL200'] . "'";
        // $this->db->select('*');
        // $this->db->from('A150');
        // $this->db->where($condition);
        // $this->db->limit(1);
        // $query = $this->db->get();

        // if ($query->num_rows() == 1) {
        //     return $query->result();
        // } else {
        //     return false;
        // }
        $sql = "SELECT * FROM LI100 WHERE LI150=" . $data['LI150'] . " AND LI151=" . $data['LI151'] . " Orders LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }

    // Read data from database to show data in admin page
    public function get_infor_user($id)
    {
        // $condition = "AI100 =" . "'" . $id . "'";
        // $this->db->select('*');
        // $this->db->from('A100');
        // $this->db->where($condition);
        // $this->db->limit(1);
        // $query = $this->db->get();

        // if ($query->num_rows() == 1) {
        //     return $query->result();
        // } else {
        //     return false;
        // }

        $sql = "SELECT * FROM TK100 WHERE TK100=" . $data['TK100'] . " Orders LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            return $result;
        } else {
            return false;
        }
    }
}
