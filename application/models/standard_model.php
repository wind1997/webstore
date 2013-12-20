<?php

class Standard_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_standard() {
            $query = $this->db->query("select * from standard");
            return $query->result();
        }
		
    function gain_standard() {
	    $type = $_POST['type'];
        $query = $this->db->query("select * from standard where type ='$type'");
	    return $query->result();
	  
    }
	  function insert_standard() {
       
    }


}

?>
