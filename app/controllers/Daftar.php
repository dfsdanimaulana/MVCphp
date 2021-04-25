<?php

class Daftar extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Nama';
        $data['list'] = $this->model('Daftar_model')->getAllData();
        $data['list_db'] = $this->model('Daftar_model')->getDatabase();
        $this->view('template/header', $data);
        $this->view('daftar/index', $data);
        $this->view('template/footer');
    }
}
