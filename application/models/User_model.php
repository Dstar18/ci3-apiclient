<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model{

    // ---------- API SERVICE DEFAULT ----------
    private function http_request_get($url=false){
        $ch = curl_init(); /* Inisialisasi curl */
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch); /* Output contains */
        curl_close($ch);
        return $response;
    }

    private function http_request_post($url=false, $post=false){
        $ch = curl_init(); /* Inisialisasi curl */
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post)); /*Mengirim data (post)*/
        $response = curl_exec($ch); /* Output contains */
        curl_close($ch);
        return $response;
    }

    private function http_request_delete($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    public function gets(){
        $url = $this->config->item('urlUserGets');
        $response = $this->http_request_get($url);
        $result = json_decode($response, true);
        return $result;
    }

    public function get($id=false){
        $url = $this->config->item('urlUserGet');
        $response = $this->http_request_get($url.$id);
        $result = json_decode($response, true);
        return $result;
    }
    
    public function insert($post=false){
        $url = $this->config->item('urlUserInsert');
        $response = $this->http_request_post($url, $post);
        $result = json_decode($response, true);
        return $result;
    }

    public function delete($id=false){
        $url = $this->config->item('urlUserDelete');
        $response = $this->http_request_delete($url.$id);
        $result = json_decode($response, true);
        return $result;
    }


}