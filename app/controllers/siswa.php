<?php 

class siswa extends controller {
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['mhs'] = $this->model('siswa_model')->getAllsiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['mhs'] = $this->model('siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('siswa_model')->tambahDataSiswa($_POST) > 0){
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '.BASEURL.'/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('siswa_model')->hapusDataSiswa($id) > 0){
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: '.BASEURL.'/siswa');
            exit;
        }else{
            flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: '.BASEURL.'/siswa');
            exit;
        }
    }

}
?>