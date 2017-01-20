<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('page_model');

    }

    public function index()
    {
        echo 123;
    }

    public function index_logined()
    {
        $this->load->view('index_logined.php');
    }

    public function indexs()
    {
        $this->load->view('index.php');
    }

    public function blogcatalogs()
    {
       $ar=array('$bid'=>$this->session->id,);
       $arr['blogs']=$ar;
        $this->load->view('blogCatalogs.php',$arr);
    }

    public function do_catalog()
    {
        $name = $this->input->post('name');
        $rs = $this->page_model->check_name($name);
        if (!$rs) {
            $this->page_model->insert_catalogs($name);
            redirect('page/blogcatalogs');
        } else {
            echo '123';
        }
    }
}