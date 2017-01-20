<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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

    public function reg()
    {
        $this->load->view('reg.php');
    }

    public function do_reg()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $pass = $this->input->post('pwd');
        $rs = $this->user_model->get_name($name);
//        var_dump($rs);
//        die();
        if ($rs) {
//            echo '已存在此用户名';
            redirect('user/reg');
        } else {
            $arr = array('ACCOUNT' => $email, 'PASSWORD' => $pass, 'NAME' => $name,);
//           var_dump($arr);
//           die();
            $bs = $this->user_model->get_insert($arr);
//            var_dump($bs);
//            die();
            if ($bs) {
//                echo '注册成功';
                redirect('user/login');
            }
        }
    }
    public function login(){
        $this->load->view('login.php');
    }
    public function do_login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pwd');
        $arr = array('ACCOUNT' => $email, 'PASSWORD' => $pass);
        $rs = $this->user_model->get_check($arr);
//        var_dump($rs);
//        die();
        if($rs){
//            $arr['blog']=$rs;
//            echo '登录成功';
//            $this->session->$rs->USER_ID;
//            var_dump( $this->session->$rs['USER_ID']);
//            die();
            $arr=array('id'=>$rs->USER_ID,'name'=>$rs->NAME,'logged_in'=>TRUE,);
            $this->session->set_userdate($arr);

            redirect('page/index_logined');
        }else{
            redirect('page/indexs');
        }
    }
}
?>