<?php
class Login_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
    function login()
    {
		$row = $this->User_model->login_check();
		if ($row)
		{
			$this->session->set_userdata('username', $row->name);
			$this->session->set_userdata('drivingnum', $row->drivingnum);
			//echo  $this->session->userdata('carnum');
			redirect('user_controller');
		}
		else
		{
			$data['title'] = '交通违章信息查询';
			$data['login_user'] = $this->session->userdata('username');
			$this->load->view('head', $data);
			$data['tips'] = '用户名或密码错误，请重试!';
			$this->load->view('login_view', $data);
			$this->load->view('foot');
		}
	}
}
?>
