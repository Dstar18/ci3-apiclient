<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['User_model']);
    }

    public function lists(){
        $result['user'] = $this->User_model->gets();
        // echo json_encode($result);
        $this->load->view('user/user_view', $result);
    }
    
    public function list($id=false){
        $result['user'] = $this->User_model->get($id);
        // echo json_encode($result);
        $this->load->view('user/userlist_view', $result);
    }
}