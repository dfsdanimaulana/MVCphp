<?php

class App {
    public function __construct() {
        $url = $this->parseURL();
        var_dump($url);
    }
    //method untuk mengambil url dan memecah sesuai dg keinginan
    public function parseURL() {
        //cek apakah ada url yg dikirimkan
        if (isset($_GET["url"])) {
            //hilangkan karaktet (/) di akhit string menggunakan rtrim
            $url = rtrim($_GET["url"], '/');
            //bersihkan url dari karakter yg aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //pecah berdasarkan tanda (/)
            $url = explode('/', $url);
            return $url;
        }
    }
}