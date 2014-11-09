<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('user');
    }
   public function index()
   {
   	if(($this->session->userdata('user')==""))
		{
			$this->load->view('register');   
		}
		else {
   	$this->load->view('adminpanel');   
		}
   }
   public function  logged(){
   	$this->load->view('adminpanel');   
   }
   public function logout()
	{
		$newdata = array(
		'user'  =>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
    public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'user', 'trim|required');
		$this->form_validation->set_rules('pass', 'pass', 'trim|required');
				
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}	
		else
		{
			$user=$this->input->post('user');
			$password=md5($this->input->post('pass'));
			$result=$this->user->login($user,$password);
			if($result) $this->logged();
			else        
			{
				$this->index();				
			}			
					}
	}
}