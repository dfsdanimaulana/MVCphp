<?php

class App
{
    //property untuk menentukan controler, method dan paramater defaultnya
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        //home/index dimana home -> contollrer dan index -> method
        //controller
        // cek dulu apakah ada file di dalam folder controller yg namanya sesuai dg yg kita tulis di url
        //kalo tidak ada gunakan controller default yaitu home
        if (isset($url)) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                //hilangkan controller dari array
                unset($url[0]);
            }
        }
        //panggil controller yg ada di folder controllers
        require_once '../app/controllers/' . $this->controller . '.php';
        //instansiasi class supaya bisa di panggil methodnya
        $this->controller = new $this->controller;

        //method
        if (isset($url[1])) {
            //cek method di dalam controller
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //params
        //cek dulu ada gak parameternya
        if (!empty($url)) {
            //ambil data
            $this->params = array_values($url);
        }
        //jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    //method untuk mengambil url dan memecah sesuai dg keinginan
    public function parseURL()
    {
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
