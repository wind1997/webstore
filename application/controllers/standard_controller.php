 <?php
class Standard_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Standard_model');
		
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$data['query'] = $this->Standard_model->get_standard();
        $this->load->view('standard_view', $data);
        $this->load->view('foot');
    }
	
	
}
?>