<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->model(['http_model/Http_request_model']);
    }

    public function gets(){
        $url = $this->config->item('urlUserGets');
        $response = $this->Http_request_model->http_request_get($url);
        $result = json_decode($response, true);
        return $result;
    }

    public function get($id=false){
        $url = $this->config->item('urlUserGet');
        $response = $this->Http_request_model->http_request_get($url.$id);
        $result = json_decode($response, true);
        return $result;
    }
    
    public function insert($post=false){
        $url = $this->config->item('urlUserInsert');
        $response = $this->Http_request_model->http_request_post($url, $post);
        $result = json_decode($response, true);
        return $result;
    }

    public function update($post=false){
        $url = $this->config->item('urlUpdate');
        $response = $this->Http_request_model->http_request_post($url, $post);
        $result = json_decode($response, true);
        return $result;
    }

    public function delete($id=false){
        $url = $this->config->item('urlUserDelete');
        $response = $this->Http_request_model->http_request_delete($url.$id);
        $result = json_decode($response, true);
        return $result;
    }


}