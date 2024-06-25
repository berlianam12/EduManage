<?php

class About extends Controller{
    public function index($nama = "Berliana",$kerja = "Mahasiswa",$tempat= "Telkom"){
        $data['nama'] = $nama;
        $data['kerja'] = $kerja;
        $data['tempat'] = $tempat;
        $data['judul'] = 'About me';
        $this->view('template/header');
        $this->view('about/index',$data);
        $this->view('template/footer');
    }
    public function page(){
        $data['judul'] = 'page';
        $this->view('template/header',$data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}