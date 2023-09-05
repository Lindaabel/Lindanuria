<?php
class Blog_model
{
    private $blog = [
        [
        "penulis" => "Fikrotu Dwi Fuadattuzzahro S.Pd.",
        "judul" => "Labib Fayumi S.Pd.Gr",
        "tulisan" => "Ervi Rahmawati ST."
    ],
    [
        "penulis" => "Ivans Zuwanta S.Kom.",
        "judul" => "Safira Maya Shovie S.Pd.",
        "tulisan" => "Novi Dyah Puspitasari S.Pd. "
    ],
    [
        "penulis" => "Estri Handayani S.Pd.",
        "judul" => "Wahyu Tri Wulansari S.Pd.",
        "tulisan" => "Fuad"
    ]
    ];
    public function getAllBlog()
    {
        return $this->blog;
    }

    public function tambahData($data)
    {
        $query = " INSERT INTO siswa VALUES
        ('', :nama, :jenis_kelamin, :alamat ) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }

   
}