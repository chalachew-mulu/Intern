<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Home extends MY_Controller {
	   public function __construct()
	{
	    parent::__construct();
        $this->lang->load('header_lang');
	}
 	   public function home()
 	{
        $data['title'] = "BDU Student Intership Home";
        $this->load->view('layout/header', $data);
		$this->load->view('layout/nav');
		$this->load->view('home/home');
		$this->load->view('layout/footer');				
 	}
 	 	public function service()
 	{
        $data['title'] = "New Announcements";
        $this->load->view('layout/header', $data);
		$this->load->view('layout/nav');
		$this->load->view('home/service');
		$this->load->view('layout/footer');				
 	}
 	 	public function about()
 	{
        $data['title'] = "About The us";
        $this->load->view('layout/header', $data);
		$this->load->view('layout/nav');
		$this->load->view('home/about');
		$this->load->view('layout/footer');				
 	}
 	 	public function login()
 	{
        $data['title'] = "BDU Student Intership Login Page";
        $this->load->view('layout/header', $data);
		$this->load->view('layout/nav');
		$this->load->view('home/login');
		$this->load->view('layout/footer');				
 	}
 }
 ?>