<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    // ---------- API SERVICE DEFAULT ----------
    private function http_request($url=false){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);

        return $result;
    }

    public function gets(){
        $url = self::http_request('http://localhost/ci3-backend/User/list');
        $result = json_decode($url, true);
        return $result;
    }

    public function get($id=false){
        $url = self::http_request('http://localhost/ci3-backend/User/listget/'.$id);
        $result = json_decode($url, true);
        return $result;
    }

}