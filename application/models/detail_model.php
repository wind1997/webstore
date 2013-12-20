<?php

class Detail_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_detail($id) {
            $query = $this->db->query('select * from detail where  bid =' . $id);
            return $query->result();
    }

    function insert_detail($id,$query) {
	
	   
		
	  foreach ($query as $item){
	  $score = $item->score;
	  $fine  = $item->fine;
	 
	 $data = array(
            'bid'  =>$id,
            'year' =>$_POST['year'],
			'month'=>$_POST['month'],
			'day'  =>$_POST['day'],
			'score'=>$score,
			'fine' =>$fine,
			'content' =>$_POST['content']
        );
        $this->db->insert('detail', $data);
		}
		
    }

}

?>
