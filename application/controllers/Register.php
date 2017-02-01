<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
     function __construct() {
        parent::__construct();
       // $this->load->helper(form);
        $this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('register_model');
    }
	public function index()
	{
		$this->load->view('register');
	}
	public function insert()
	{
		$name=$this->input->post('name');
		$mobile=$this->input->post('mobile');
		$email=$this->input->post('email');
        $gender=$this->input->post('gender');
        $hobbies=$this->input->post('hobbies');
        $hob=implode(",",$hobbies);
        $profile=$this->input->post('profile');
        $country=$this->input->post('country');
        $data=array('name'=>$name,
        	'mobile'=>$mobile,
        	'email'=>$email,
        	'gender'=>$gender,
        	'hobbies'=>$hob,
            'profile'=>$profile,
        	'country'=>$country);
       $btn=$this->input->post('s1');
        if($btn=='submit')
        {
        $this->register_model->insert($data);
        }
        if($btn=='view')
        {
            $data['result']= $this->register_model->view();
            
            $this->load->view('reg_view',$data);
        }
        // if($btn=='update')
        // {
        //     $id=$this->input->post('id');
        //    $this->register_model->update($id,$data);  
        // }
    }
    // public function edit($id)
    // {
    //     $id=$this->uri->segment(3);
    //     $data['result']=$this->register_model->edit($id);
    //     $this->load->view('register',$data);
    // }   
       
}