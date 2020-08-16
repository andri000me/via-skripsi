<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$this->load->model('login_m');
	}
	public function index()
	{
		$data['content'] = 'admin';
		$this->load->view('index',$data);
	}
	public function data_proyek()
	{
		if($this->session->tipe=='satker'){
			$data['data_proyek'] = $this->login_m->getProyekBySatker($this->session->iduser);
		}else{
			$data['data_proyek'] = $this->login_m->getProyek();
		}
		
		$data['content'] = 'daftar_proyek';
		$this->load->view('index',$data);
	}
	public function data_proyek_selesai()
	{
		$data['data_proyek'] = $this->login_m->getProyekSelesai();
		$data['content'] = 'daftar_proyek';
		$this->load->view('index',$data);
	}
	public function data_proyek_proses()
	{
		$data['data_proyek'] = $this->login_m->getProyekProses();
		$data['content'] = 'daftar_proyek';
		$this->load->view('index',$data);
	}
	public function detail_proyek($id)
	{
		// $data['data_proyek'] = $this->login_m->getProyek();
		$data['proyekById'] = $this->login_m->getViewProyekById($id);
		$data['list_file']= $this->login_m->getAllfile($id);
		$data['content'] = 'detail_proyek';
		$this->load->view('index',$data);
	}
	public function tambah_data_proyek()
	{
		$data['satkers']=$this->login_m->getSatkers();
		$data['kontraktor']=$this->login_m->getKontraktor();
		$data['content'] = 'tambah_proyek';
		$this->load->view('index',$data);
	}
	public function pengguna()
	{
		if($this->session->tipe!='administrator'){
			redirect(base_url('admin'));
		}
		$data['users'] = $this->login_m->getPengguna();
		$data['content'] = 'pengguna';
		$this->load->view('index',$data);
	}
	public function tambah_pengguna()
	{
		$data['content'] = 'tambah_pengguna';
		$this->load->view('index',$data);
	}
	public function edit_pengguna($id)
	{
		$data['userById'] = $this->login_m->getUserById($id); 
		$data['content'] = 'edit_pengguna';
		$this->load->view('index',$data);
	}

	public function kontraktor()
	{
		if($this->session->tipe!='administrator'){
			redirect(base_url('admin'));
		}
		$data['users'] = $this->login_m->getKontraktor();
		$data['content'] = 'kontraktor';
		$this->load->view('index',$data);
	}
	public function tambah_kontraktor()
	{
		$data['content'] = 'tambah_kontraktor';
		$this->load->view('index',$data);
	}
	public function edit_kontraktor($id)
	{
		$data['kontraktorById'] = $this->login_m->getKontraktorById($id); 
		$data['content'] = 'edit_kontraktor';
		$this->load->view('index',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function edit_proyek($id)
	{
		$data['satkers']=$this->login_m->getSatkers();
		$data['kontraktor']=$this->login_m->getKontraktor();
		$data['proyekById'] = $this->login_m->getProyekById($id); 
		// var_dump(date('d/m/Y',strtotime($data['proyekById']['tanggal_proyek'])));die;
		$data['content'] = 'edit_proyek';
		$this->load->view('index',$data);
	}
}