<?php

class App
{
    //property untuk menentukan controler, method dan paramater defaultnya
    // yg akan di tampilkan saat url tidak di tuliskan
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        //home/index dimana home -> contollrer dan index -> method

        //controller

        // cek dulu apakah ada file di dalam folder controller yg namanya sesuai dg yg kita tulis di url controller ex. home
        //kalo tidak ada gunakan controller default yaitu home
        if (isset($url)) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                // jika ada timpa controler default home dengan controler yg baru
                $this->controller = $url[0];
                //hilangkan controller yg baru dari array supaya bisa mengambil parameternya
                unset($url[0]);
            }
        }
        //setelah tahu kontroler apa yg di kirim di url
        //panggil controller yg ada di folder controllers
        require_once '../app/controllers/' . $this->controller . '.php';
        //instansiasi class supaya bisa di panggil methodnya
        $this->controller = new $this->controller;

        //method

        // cek apakah method (index) ada di dalam controller (home)
        // jika method tidak di kirimkan yg akan di panggil adalah method index pastikan setiap membuat kontrler harus ada method index
        // home/index
        if (isset($url[1])) {
            //cek method ($url[1] = index)di dalam controller (home = $this->controller)
            //kalo ada timpa dan hapus method dari array
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //params
        // home/index/satu/dua

        //cek dulu ada gak parameternya
        if (!empty($url)) {
            //ambil data dari url yg di tulis dan masukan ke array paramas
            $this->params = array_values($url);
        }

        //jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    //method untuk mengambil url dan memecah sesuai dg keinginan
    // digunakan untuk mempercantik url yg dikirim dan di datangkap
    public function parseURL()
    {
        //cek apakah ada url yg dikirimkan
        if (isset($_GET["url"])) {

            // url akan di tulis ulang di file htaccess yg ada di folder public
            // url yg di ambil adalah url yg sudah di tulis ulang di file htaccess
            // ex url = about/home/data/
            //hilangkan karaktet (/) di akhir string menggunakan rtrim
            $url = rtrim($_GET["url"], '/');
            //bersihkan url dari karakter yg aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //pecah berdasarkan tanda (/)
            $url = explode('/', $url);
            return $url;

            // return dari fungsi ini yang di butuhkan untuk mencalankan controler dan method kita
        }
    }
}
