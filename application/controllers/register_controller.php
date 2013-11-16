<?php
class Register_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		
        
        $this->load->view('register_view', $data);
		
        $this->load->view('foot');
    }
    
    function add()
    {
		$this->User_model->add_user();
		$this->load->view('congratulation');
	}
}
?>
