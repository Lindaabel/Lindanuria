<?php
class User  extends Controller {
    public function index() {
        $data['judul'] = "User";
        $this->view("user/index");
        //echo "User/index";      
    }
    public function profile($nama = "Linda", $pekerjaan = "Pelajar") {
        $data['judul'] = "User";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view("user/profile", $data);
        $this->view("templates/footer");
        //echo "Salam kenal saya $nama, saya seorang
        //$pekerjaan";
        
    }
}