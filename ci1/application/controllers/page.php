<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        echo 123;
    }
    public function index_logined(){
        $this->load->view('index_logined.php');
    }
    public function indexs(){
        $this->load->view('index.php');
    }
}