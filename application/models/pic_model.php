<?php

class PIC_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_pic($id) {
            $query = $this->db->query('select * from pic where  bid =' . $id);
            return $query->result();
    }

   function insert_pic($id) {
         $dest_folder  = "picture/$id/"; 
	    if(!file_exists($dest_folder)){ 
        mkdir($dest_folder,0777,true); 
          } 
		  $max = $_POST['number'];
		  for($i=0;$i<$max;$i++){
          $file = $_FILES['file'.$i];
		   $filename = $file["tmp_name"];
		   $name = $file["name"];
 
          $uploadfile = $dest_folder.$name;
            $data = array(
            'bid' => $id ,
            'src' =>  $uploadfile 
             );
        $this->db->insert('pic', $data);	   
	  move_uploaded_file($filename, $uploadfile); 
                                  }
}
   
}

?>
