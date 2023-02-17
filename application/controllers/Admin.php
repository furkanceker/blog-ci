<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('adminlogin') && $this->uri->segment(2) && $this->uri->segment(2) != "login"){
			redirect('admin');
		}
	}

	public function index()
	{
		if($this->session->userdata('adminlogin')) {
			redirect('admin/panel');
		}
		$this->load->view("back/login");
	}



	public function login(){
		$email = $this->input->post("email");
		$sifre = $this->input->post("sifre");
		$sifreli = sha1(md5($sifre));

		if(!$sifre || !$email){
			$message = "Boş Alanları Doldurun";
			$this->session->set_flashdata('empty',$message);
			redirect('admin');
		}else{
			$data = ['email'=>$email,'password'=>$sifreli];
			$exist = $this->common_model->get($data,"admin");
			if($exist){
				$this->session->set_userdata('adminlogin',true);
				$this->session->set_userdata('admininfo',$exist);
				redirect('admin/panel');
			}else{
				$error = "E-Posta veya Şifre Hatalı";
				$this->session->set_flashdata('error',$error);
				redirect('admin');
			}
		}
	}

	public function panel(){
		$this->load->view('back/index');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
