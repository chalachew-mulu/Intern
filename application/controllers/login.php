<?php

    /******************************************
    *      Codeigniter 3 Simple Login         *
    *   Developer  :  rudiliucs1@gmail.com    *
    *        Copyright © 2017 Rudi Liu        *
    *******************************************/

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        $this->load->model("user_model");
    }

    public function index() {
    
        if($this->session->userdata('logged_in')) {
            redirect(base_url("admin/user"));
        }else {
            $data = array('alert' => false);
            $this->load->view('home/login',$data);
        }
    }

    private function ajax_checking(){
        if (!$this->input->is_ajax_request()) {
            redirect(base_url());
        }
    }

    public function login(){
        $postData = $this->input->post();
        $validate = $this->user_model->validate_login($postData);
        if ($validate){
            $newdata = array(
                'email'     => $validate[0]->email,
                'name' => $validate[0]->name,
                'role' => $validate[0]->role,
                'user_id' => $validate[0]->user_id,
                'logged_in' => TRUE,
              
            );
            $this->session->set_userdata($newdata);
            redirect(base_url("admin/user")); 
        }
        else{
            $data = array('alert' => true);
            redirect('home/login','refresh');
        }
     
    }

    /*function change_password(){
        $this->ajax_checking();

        $postData = $this->input->post();
        $update = $this->authentication_model->change_password($postData);
        if($update['status'] == 'success')
            $this->session->set_flashdata('success', 'Your password has been successfully changed!');
        echo json_encode($update);
    }*/
    public function logout() {
        $this->session->sess_destroy();
        redirect('home/login','refresh');
    }

}

/* End of file */
