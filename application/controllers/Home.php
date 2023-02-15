<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('front/index');
	}
	public function hakkimizda()
	{
		$this->load->view('front/hakkimizda');
	}
	public function iletisim()
	{
		$this->load->view('front/iletisim');
	}
}
