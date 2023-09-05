<?php
class Data_model
{
    private $data_siswa = [
        [
        "penulis" => "Kharisma Hidayah",
        "judul" => "20",
        "tulisan" => "Rekayasa Perangkat Lunak"
    ],
    [
        "penulis" => "Nevi Yuniawati",
        "judul" => "31",
        "tulisan" => "Rekayasa Perangkat Lunak"
    ],
    [
        "penulis" => "Linda Nuria Abel",
        "judul" => "22",
        "tulisan" => "Rekayasa Perangkat Lunak"
    ]
    ];
    public function getAllSiswa()
    {
        return $this->data_siswa;
    }
}