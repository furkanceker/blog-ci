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
	public function blog($id)
	{
		$this->load->view('front/blog');
	}
	public function iletisim()
	{
		$this->load->view('front/iletisim');
	}
	public function iletisimpost(){
		$isim = postvalue("isim");
		$email = postvalue("email");
		$telefon = postvalue("telefon");
		$mesaj = postvalue("mesaj");
		if(!$isim || !$email || !$telefon || !$mesaj){
			flashhome('warning','Boş Alanları Doldurun');
			back();
		}else{
			$data = [
				'isim' => $isim,
				'email' => $email,
				'telefon' => $telefon,
				'mesaj' => $mesaj,
			];

			$result = $this->common_model->insert("iletisim",$data);
			if($result){
				flashhome('success','Mesaj Gönderildi');
				back();
			}else{
				flashhome('danger','Mesaj Gönderilemedi');
				back();
			}
		}
	}
}
