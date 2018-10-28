<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    public function index(){
        $this->load->view('inc/header');
        $this->load->view('login');
        $this->load->view('inc/footer');
    }
	
}
