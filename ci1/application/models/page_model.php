<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

    }
    public  function check_name($name){
        $arr=array('NAME'=>$name);
    $query =  $this->db->get_where('t_blog_catalogs',$arr);
    return $query->row();
//    echo "<pre>";
//    var_dump($query->row());
//    echo "</pre>";
    }
    public function insert_catalogs($name){
        $arr=array('NAME'=>$name);
        $query = $this->db->insert('t_blog_catalogs',$arr);
        return $query;
    }
}
?>