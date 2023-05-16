<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Http_request_model extends CI_Model{

    // ---------- API SERVICE DEFAULT ----------
    public function http_request_get($url=false){
        $ch = curl_init(); /* Inisialisasi curl */
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch); /* Output contains */
        curl_close($ch);
        return $response;
    }

    public function http_request_post($url=false, $post=false){
        $ch = curl_init(); /* Inisialisasi curl */
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post)); /*Mengirim data (post)*/
        $response = curl_exec($ch); /* Output contains */
        curl_close($ch);
        return $response;
    }

    public function http_request_delete($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); /* Set url */
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

}