 <?php
class User_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Brief_model');
		$this->load->model('Detail_model');
		$this->load->model('Pic_model');
		$this->load->model('Car_model');
		date_default_timezone_set("PRC");
	}
	
    function index()
    {
		$data['title'] = '交通违章信息查询';
		$data['login_user'] = $this->session->userdata('username');
		$data['drivingnum'] = $this->session->userdata('drivingnum');
		//$data['query1'] = $this->Car_model->get_car($data['drivingnum']);
		$this->load->view('head', $data);
		$data['query'] = $this->Brief_model->get_brief($data['drivingnum']);
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
	 function pay($id){
	    $data['flag']= $this->Brief_model->update_brief($id);
		 if($data['flag'] == 1)
		     echo "<script>alert('success!');window.location.href='../../user_controller/index'</script>";
		 else
		     echo "<script>alert('fail!');window.location.href='../../user_controller/index'</script>";
		
		
		
	  }
}
?>