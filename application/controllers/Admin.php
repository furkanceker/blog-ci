<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view("back/login");
	}

	public function login(){
		$email = $this->input->post("email");
		$sifre = $this->input->post("sifre");
		$sifreli = sha1(md5($sifre));

		if(!$sifre || !$email){
			
		}else{

		}
	}
}
