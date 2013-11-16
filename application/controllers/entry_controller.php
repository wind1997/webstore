<?php
class Entry_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['tips'] = '';
		$data['login_user'] = $this->session->userdata('username');
		$this->load->view('head', $data);
        $this->load->view('login_view');
       $this->load->view('foot');
    }
	
}
?>
