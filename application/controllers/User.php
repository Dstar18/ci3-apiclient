<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(['User_model']);
    }

    public function lists($response=false){
        $result['user'] = $this->User_model->gets();
        $result['message'] = $response;
        $this->load->view('user/user_view', $result);
    }
    
    public function list($id=false){
        $result['user'] = $this->User_model->get($id);
        $this->load->view('user/user_list', $result);
    }

    public function insert(){
        if($this->input->method() == 'post'){
            $post = $this->input->post(null, TRUE);
            $result['message'] = $this->User_model->insert($post);
            return $this->load->view('user/user_insert',$result);
        }
        $this->load->view('user/user_insert');
    }

    public function update($id=false){
        if($this->input->method() == 'post'){
            $post = $this->input->post(null, TRUE);
            $result['message'] = $this->User_model->update($post);
            // echo json_encode($result);
            $result['user'] = $this->User_model->get($id);
            return $this->load->view('user/user_update',$result);
        }
        $result['user'] = $this->User_model->get($id);
        $this->load->view('user/user_update', $result);
    }

    public function delete($id=false){
        $response = $this->User_model->delete($id);
        $this->lists($response);
    }
}