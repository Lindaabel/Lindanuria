<?php
class Data extends Controller
{
    public function data_siswa()
    {
        $data['judul'] = "Data Guru";
        $data['data_siswa'] = $this->model("Data_model")->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('data/data_siswa', $data);
        $this->view('templates/footer');
    }
}