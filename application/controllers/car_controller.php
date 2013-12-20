<?php
class Car_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Car_model');
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$this->load->view('addcar_view', $data);
	    $this->load->view('foot');
    }
	
	function add()
    {  
     	$data['drivingnum'] = $this->session->userdata('drivingnum');
		$this->Car_model->add_car($data['drivingnum']);
		redirect('car_controller');
	}
}
?>
