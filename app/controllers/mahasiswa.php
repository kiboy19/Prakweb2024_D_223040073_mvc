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
            Flasher::setFlash('berhasil',  'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal',  'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil',  'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal',  'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
