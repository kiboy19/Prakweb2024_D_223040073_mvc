<?php
class mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasuswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('tempelates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tempelates/footer');
    }
    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
