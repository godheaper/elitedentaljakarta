<?php

class Appointment extends CI_Model {

    protected $_table_name = "tb_appointment";

    function __construct() {
        $this->load->database();
    }

    function get_all() {
        return $this->db->get($this->_table_name)->result();
    }

    function get_by_id($id) {
        $this->db->where('id',$id);
        return $this->db->get($this->_table_name)->result();
    }

}
