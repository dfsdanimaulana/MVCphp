<?php

class Home extends Controller
{
    public function index()
    {
        //memanggil method di class controller yg ada di core
        //home/index -> alamat menuju views yg mau kita akses
        $data['judul'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home/index'); //artinya saya akan memanggil files yg ada di folder views lalu ke folder home lalu nama filenya index.php
        $this->view('template/footer');
    }
}
