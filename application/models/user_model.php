<?php
class User_model extends CI_Model {

    var $name = '';
	var $truename='';
    var $password = '';
    var $email = '';
	var $drivingnum='';
	var $carnum = '';
 

    function __construct()
    {
        parent::__construct();
    }
    
    function add_user()
    {
		$this->name = $_POST['name'];
        $this->password = $_POST['password'];
		$this->truename = $_POST['truename'];
        $this->email = $_POST['email'];
        $this->drivingnum = $_POST['drivingnum'];
		$this->carnum = $_POST['carnum'];
        
        $this->db->insert('user', $this);
	}
	
	function login_check()
	{
		$query = $this->db->get_where('user', array('name' => $_POST['name'], 'password' => $_POST['password']));
		return $query->row();
	}
}
?>
