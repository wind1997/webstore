<?php

class Brief_model extends CI_Model {

    var $id = '';
    var $carnum = '';
    var $type = '';
    var $time = '';

    function __construct() {
        parent::__construct();
    }

    function get_brief($id) {
        if ($id) {
            $query = $this->db->query('select * from brief where carnum =' . $id);
            return $query->result();
        } else {
            $query = $this->db->query('select * from brief');
            return $query->result();
        }
    }

    function insert_brief() {
        $data = array(
		    'carnum' => $_POST['carnum'],
            'type' => $_POST['type'],
            'time' => date("Y-m-d H:i:s", time()),
        );
        $this->db->insert('brief', $data);
    }

    function update_brief() {
       
    }

}

?>
