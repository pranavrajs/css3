<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model {
 
 public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

public function add_entry()
	{
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'age'=>$this->input->post('age'),
			'phone'=>$this->input->post('phone'),
			'q1'=>$this->input->post('q1'),
			'q2'=>$this->input->post('q2')
				);
		$this->db->insert('tedx',$data);
	}
function login($user,$password)
    {
		$this->db->where("name",$user);
      $this->db->where("password",$password);
      $query=$this->db->get("user");
       if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
                $newdata = array(
                	   'user' 		=> $rows->name,
                    	'logged_in' => TRUE,
                   );
			}
		
     	$this->session->set_userdata($newdata);
               return true;     
   }
}
}