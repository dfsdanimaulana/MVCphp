<?php
// yg pertama di buka saat membuka aplikasi
// controler default
class Home extends Controller
{
    // method default
    public function index()
    {
        //memanggil method di class controller yg ada di core
        //home/index -> alamat menuju views yg mau kita akses
        $data['judul'] = 'Home';
        //mengambil data dari model
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index', $data); //artinya saya akan memanggil files yg ada di folder views lalu ke folder home lalu nama filenya index.php
        $this->view('template/footer');
    }
}
