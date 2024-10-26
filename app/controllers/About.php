<?php

class About
{
    public function index($nama = 'Muhamad Ariel Septiadi', $pekerjaan = "Mahasiswa", $umur = 24)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('tempelates/header', $data);
        $this->view('about/index', $data);
        $this->view('tempelates/footer');
    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('tempelates/header', $data);
        $this->view('about/page');
        $this->view('tempelates/footer');
    }
}
