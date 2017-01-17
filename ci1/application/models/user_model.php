<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          class User_model extends CI_Model{

              public function __construct()
              {
                  parent::__construct();

              }

              public function index()
              {

              }
              public function get_name($name){
                 //$query= $this->db->get_where('t_users',$name);
                  $query= $this->db->query("select * from t_users where NAME ='$name'");
                 return $query->row();
              }
              public function get_insert($arr){
                  $query=$this->db->insert('t_users',$arr);
                  return $query;
              }
              public function get_check($arr){
                  $query =  $this->db->get_where('t_users',$arr);
                  return $query->row();
              }
          }