<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('tempelates/header', $data);
        $this->view('home/index');
        $this->view('tempelates/footer');
    }
}
