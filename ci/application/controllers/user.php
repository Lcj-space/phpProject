<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
     class User extends CI_Controller{
        public function  __construct()
         {
             parent::__construct();
             $this->load->model('user_model');
         }
         public function index(){
            echo 123;
         }
         public  function reg(){
             //把view中reg.php在浏览器上展示出来；ci下的传值都是数组
             $this->load->view('reg.php');
         }
         public  function do_reg(){
             $name =$this->input->post('uname');
             $pass =$this->input->post('pass');
             $rs=$this->user_model->checkname($name);
             if($rs){
                 $this->reg();
             }
             else{
                 $rs=$this->user_model->get_insert($name,$pass);
                 if($rs){
//                    echo '123';
                 redirect('user/login');
                 }
             }
//             echo $name."--".$pass;
         }
         public  function login(){
             //把view中reg.php在浏览器上展示出来；ci下的传值都是数组
             $this->load->view('login.php');
         }
         public function do_login(){
             $name =$this->input->post('uname');
             $pass =$this->input->post('pass');
             $rs=$this->user_model->check($name,$pass);
             if ($rs){
                 redirect('user/home');
//                 echo '登录成功';
             }else{
                 echo '重新登录';
             }
         }

         public  function home(){
             $this->load->view('home.php');
         }

     }
?>