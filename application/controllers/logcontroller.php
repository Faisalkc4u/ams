<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logcontroller extends CI_Controller {

    public function index()
	{
		$this->load->view('first');
    }
    /*public function login()
	{
	 $u=$this->input->post("username");
	 $p=$this->input->post("password");
	 $this->form_validation->set_rules("username","Username","required");
	 $this->form_validation->set_rules("password","Password","required");
	 if($this->form_validation->run()==false)
	 {
	  $this->load->view("login");
	 }
	 else
	 {
	  $this->load->model('adminmodel','',true);
	  $data=$this->adminmodel->login($u,$p);
	  if($data==false)
	  {
	   $data['error']="Incorrect Username or Password";
	   $this->load->view("login",$data);
	  }
	  else if($data=='admin')
	  {
	  $this->layout->render("admin/home");
	  
	  }
	  else
	  {
	 $this->layout->render("officer/home");
	  
	  }
	 }*/
	}