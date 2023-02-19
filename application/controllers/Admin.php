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
				$this->session->set_userdata([
					'oturum'=>true,
					'id'=>$exist->id,
					'name'=>$exist->name,
					'email'=>$exist->email,
					'password'=>$exist->password,
				]);
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

	public function yoneticiler(){
		$data['adminler'] = $this->common_model->get_all("admin");
		$this->load->view('back/yoneticiler',$data);
	}

	public function yoneticipost(){
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$encpass = sha1(md5($password));
		if(!$name || !$email || !$password){
			flash('warning','Boş Alanları Doldurun');
			back();
			back();
		}else{

			$exist = $this->common_model->get(['email'=>$email],"admin");
			if($exist){
				flash('warning','Yönetici Zaten Kayıtlı');
				back();
			}else{
				$data = [
					'name' => $name,
					'email' => $email,
					'password' => $encpass,
				];

				$query = $this->common_model->insert("admin",$data);
				if($query){
					flash('success','Yönetici Eklendi');
					back();
				}else{
					flash('danger','Yönetici Ekleme Başarısız');
					back();
				}
			}
		}
	}

	public function yoneticisil($id){
		$uid = $this->session->userdata('id');
		if($uid != $id){
			$exist = $this->common_model->get(['id'=>$id],"admin");
			if($exist){
				$delete = $this->common_model->delete("admin",['id'=>$id]);
				if($delete){
					flash('success','Yönetici Silindi');
					back();
				}else{
					flash('danger','Yönetici Silme Başarısız');
					back();
				}
			}else{
				flash('warning','Yönetici Bulunamadı');
				back();
			}
		}else{
			flash('warning','Kendinizi Silemezsiniz');
			back();
		}
	}

	public function sifre(){
		$this->load->view('back/sifre-degistirme');
	}

	public function sifrepost(){
		$uid = $this->session->userdata('id');
		$oldpass = $this->input->post("sifre");
		$encpass = sha1(md5($oldpass));
		$newpass = $this->input->post("yenisifre");
		$encpass2 = sha1(md5($newpass));
		if(!$oldpass || !$newpass){
			flash('warning','Boş Alanları Doldurun');
			back();
		}else{
			$exist = $this->common_model->get(['id'=>$uid,'password'=>$encpass],"admin");
			if($exist){
				$result = $this->common_model->update($uid,"admin",['password'=>$encpass2]);
				if($result){
					flash('success','Şifre Değiştirildi');
					back();
				}else{
					flash('danger','Şifre Değiştirme Başarısız');
					back();
				}
			}else{
				flash('danger','Eski Şifre Hatalı');
				back();
			}
		}
	}

	public function hakkimizda(){
		$this->load->view('back/hakkimizda');
	}
	public function iletisim(){
		$this->load->view('back/iletisim');
	}
	public function blog(){
		$this->load->view('back/blog');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
