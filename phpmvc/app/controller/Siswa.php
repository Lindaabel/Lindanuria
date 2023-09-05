<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['data_siswa'] = $this->model("Siswa_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

public function detail($id)
{
    $data['judul'] = "Detail Siswa";
    $data['siswa'] = $this->model("Siswa_model")->getBlogById($id);
    $this->view('templates/header', $data);
    $this->view('siswa/detail', $data);
    $this->view('templates/footer');

}
public function tambah()
{
    if( $this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 ){
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/siswa');
        exit;
    } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/siswa');
        exit;
    }
}
public function getubah()
{
    echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
}

public function ubah()
{
    if($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0 ){
        Flasher::setFlash('berhasil','diubah','success');
        header('Location:'.BASEURL.'/siswa');
        exit;
    }else{
        Flasher::setFlash('gagal','diubah','danger');
        header('Location:'.BASEURL.'/siswa');
        exit;
    }
}
}
