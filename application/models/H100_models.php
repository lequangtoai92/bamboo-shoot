<?php

/**
 * @author: Toailq - 4/12/2018
 * @model: h100_model
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class H100_models extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function f2018_get_saga_vn()
    {
        $this->db->select('*');
        $this->db->from('V100');
        $this->db->order_by("VD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
    }
		
		public function f2018_get_saga_jp()
    {
        $this->db->select('*');
        $this->db->from('J100');
        $this->db->order_by("JD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}
		
		public function f2018_get_grimm()
    {
        $this->db->select('*');
        $this->db->from('G100');
        $this->db->order_by("GD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}

		public function f2018_get_greek_mythology()
    {
        $this->db->select('*');
        $this->db->from('M100');
        $this->db->order_by("MD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}

		public function f2018_get_folk_proverb()
    {
        $this->db->select('*');
        $this->db->from('P100');
        $this->db->order_by("PD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}

		public function f2018_get_gnomic()
    {
        $this->db->select('*');
        $this->db->from('G150');
        $this->db->order_by("GD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}

		public function f2018_get_funny()
    {
        $this->db->select('*');
        $this->db->from('F150');
        $this->db->order_by("FD152", "DESC");

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            echo json_encode($result);
        } else {
            return false;
        }
		}


}
