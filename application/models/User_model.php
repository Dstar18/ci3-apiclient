<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    // ---------- API SERVICE DEFAULT ----------
    private function http_request($url=false){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public function gets(){
        $url = $this->config->item('urlUserGets');
        $response = $this->http_request($url);
        $result = json_decode($response, true);
        return $result;
    }

    public function get($id=false){
        $url = $this->config->item('urlUserGet');
        $response = self::http_request($url.$id);
        $result = json_decode($response, true);
        return $result;
    }

    public function info(){
        $data = $this->gets();
        foreach($data->resultData as $row){
            $result[] = $row;
        }
        return $result;
    }

}