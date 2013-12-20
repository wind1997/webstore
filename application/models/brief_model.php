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
        if ($id =='') {
		$query = $this->db->query('select * from brief');
            return $query->result();
           
        } else {
            $query = $this->db->query("select a.carnum,a.id,type,time,deal from brief a,car b where a.carnum = b.carnum
										and drivingnum = '$id'");
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

    function update_brief($id) {
	   $flag = mt_rand(0,1);
	   if($flag == 1){
	   $data = array(
               'deal' => '是'
            );
	   $this->db->where('id', $id);
       $this->db->update('brief', $data);

	   }
	return $flag;
       }

}

?>
