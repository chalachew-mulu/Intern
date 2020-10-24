<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * @property CI_Config $config
 * @property CI_Session $session
 */

class MY_Controller extends CI_Controller {

    /***
     * pages of site in menu
     */

    function __construct() {
        parent::__construct();
        $this->load_lang();
    }

    /**
     * return module language file
     */
    protected function load_lang() {
        if ($this->uri->segment(1) == 'en' ||
            $this->uri->segment(1) == 'am'||
            $this->uri->segment(1) == 'or'||
            $this->uri->segment(1) == 'tg'
        ) {
            $this->session->set_userdata("lang", $this->uri->segment(1));
            redirect(base_url());
        }

        if ($this->session->userdata('lang') == "am") {
            $lang = "amharic";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'am');
        } elseif ($this->session->userdata('lang') == "or") {
            $lang = "oromigna";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'or');
        }elseif($this->session->userdata('lang') == "tg"){
            $lang = "tigrigna";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'tg');
        }
        else{
            $lang = "english";
            $this->config->set_item('language',$lang);
            $this->session->set_userdata("lang",'en');
        }
        //  $this->lang->load($moduleName, $lang);
    }
}