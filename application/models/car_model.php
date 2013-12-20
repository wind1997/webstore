<?php

class Car_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
function get_car($drivingnum) {
            $query = $this->db->query('select * from car where  drivingnum =' . $drivingnum);
            return $query->result();
    }
	
   function add_car($id)
    {
        $this->drivingnum = $id;
		$this->carnum = $_POST['carnum'];
        
        $this->db->insert('car', $this);
	}
   
}

?>
