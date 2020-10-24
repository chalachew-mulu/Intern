<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Admin extends MY_Controller {
 	function __construct()
 	{
 		parent::__construct();
 		$this->lang->load('header_lang');
 	}
 	    public function home()
 	{
        $data['title'] = "Admin Home Page";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/user');
		$this->load->view('layout/admin_footer');				
 	}
 	 	public function adminster()
 	{
        $data['title'] = "Control User";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	    public function session()
 	{
        $data['title'] = "Manage Session";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	 	public function placement()
 	{
        $data['title'] = "Manage Placement";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	    public function supervise()
 	{
        $data['title'] = "Student Supervision";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	 	public function assess()
 	{
        $data['title'] = "General User Assessment";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	    public function survey()
 	{
        $data['title'] = "Survey";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	 	public function announce()
 	{
        $data['title'] = "Post New Announcement";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/admin');
		$this->load->view('layout/admin_footer');				
 	}
 	    public function user()
 	{
 	    $data['title'] = "Post New Announcement";
        $this->load->view('layout/admin_header', $data);
		$this->load->view('admin/user');
		$this->load->view('layout/admin_footer');		
 	}
 }
 ?>