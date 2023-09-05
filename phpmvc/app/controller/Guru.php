<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['guru'] = $this->model("Guru_model")->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

public function detail($id)
{
    $data['judul'] = "Detail Guru";
    $data['siswa'] = $this->model("Guru_model")->getBlogById($id);
    $this->view('templates/header', $data);
    $this->view('guru/detail', $data);
    $this->view('templates/footer');

}
public function tambah()
{
    if( $this->model('Guru_model')->tambahDataGuru($_POST) > 0 ){
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/guru');
        exit;
    } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/guru');
        exit;
    }
}
public function hapus()
{
    if( $this->model('Guru_model')->tambahDataGuru($_POST) > 0 ){
        Flasher::setFlash('berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/guru');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/guru');
        exit;
    }
}


}
