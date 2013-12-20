<?php
class Upload_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Brief_model');
		$this->load->model('Detail_model');
		$this->load->model('Pic_model');
		$this->load->model('Standard_model');
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$this->load->view('upload_view', $data);
	    $this->load->view('foot');
    }
    
    function load()
    {
		$this->Brief_model->insert_brief();
		$data['id'] = mysql_insert_id();
		$data ['query']=$this->Standard_model->gain_standard();
		$this->Detail_model->insert_detail($data['id'],$data['query']);
		$this->Pic_model->insert_pic($data['id']);
		$this->load->view('upcomplete',$data);
		
	}
}
?>
