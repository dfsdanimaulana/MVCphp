
<?php

class About extends Controller
{
    //method default
    //bisa mengambil data dari url
    public function index($nama = 'nama', $job = 'job', $umur = 22)
    {
        //kirim data
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}
