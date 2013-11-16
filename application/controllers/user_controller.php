 <?php
class User_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Brief_model');
		$this->load->model('Detail_model');
		$this->load->model('Pic_model');
		date_default_timezone_set("PRC");
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$data['carnum'] = $this->session->userdata('carnum');
		$this->load->view('head', $data);
		$data['query'] = $this->Brief_model->get_brief($data['carnum']);
        $this->load->view('general_view', $data);
        $this->load->view('foot');
    }
	
	 function content($id){
	 $data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$data['id'] = $id;
		
		$data['query'] = $this->Detail_model->get_detail($data['id']);
		$data['pquery'] = $this->Pic_model->get_pic($data['id']);
        $this->load->view('detail_view', $data);
        $this->load->view('foot');
	 }
}
?>