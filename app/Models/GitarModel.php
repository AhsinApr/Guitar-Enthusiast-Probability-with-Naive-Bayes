<?php

namespace App\Models;

use CodeIgniter\Model;

class GitarModel extends Model
{
    protected $table = "gitar";
    protected $primaryKey = "id_gitar";
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_gitar', 'nama', 'id_merk', 'warna', 'jenis', 'ukuran', 'harga',  'gambar', 'hasil'];
    public function getIdGitar($id_gitar)
    {
        return $this->where(['id_gitar' => $id_gitar])->first();
    }
    public function getGitarBymerk($id)
    {
        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran,gitar.id_merk');
        $builder->where('id_merk', $id); // Mengubah 'gitar.id_merk' menjadi 'id_merk'
        $data = $builder->get()->getResult(); // Menggunakan getResultArray() agar hasilnya dalam bentuk array
        return $data;
    }
    public function getByMerk()
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran,gitar.id_merk');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        // $builder->where('kosultasi.id_konsul', $id_konsul);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitar()
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        // $builder->where('kosultasi.id_konsul', $id_konsul);
        $data = $builder->get()->getResult();
        return $data;
    }


    public function getGitarRekomendasi($jenis, $ukuran, $warna, $harga)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis);
        $builder->where('ukuran', $ukuran);
        $builder->where('warna', $warna);
        $builder->where('harga', $harga);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitarRekomendasisuka($jenis, $ukuran, $warna, $harga)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis);
        $builder->where('ukuran', $ukuran);
        $builder->where('warna', $warna);
        $builder->where('harga', $harga);
        $builder->where('hasil', "Disukai");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitarRekomendasitidak($jenis, $ukuran, $warna, $harga)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis);
        $builder->where('ukuran', $ukuran);
        $builder->where('warna', $warna);
        $builder->where('harga', $harga);
        $builder->where('hasil', "Tidak");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitarData($jenis_satu,  $ukuran_satu, $warna_satu, $harga_satu)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis_satu);
        $builder->where('ukuran', $ukuran_satu);
        $builder->where('warna', $warna_satu);
        $builder->where('harga', $harga_satu);
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitarDatadisukai($jenis_satu,  $ukuran_satu, $warna_satu, $harga_satu)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis_satu);
        $builder->where('ukuran', $ukuran_satu);
        $builder->where('warna', $warna_satu);
        $builder->where('harga', $harga_satu);
        $builder->where('hasil', "Disukai");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getGitarDataditidakdisukai($jenis_satu,  $ukuran_satu, $warna_satu, $harga_satu)
    {

        $builder = $this->db->table("gitar");
        $builder->select('gitar.id_merk, gitar.id_gitar, gitar.harga,gitar.gambar, gitar.nama, gitar.warna, gitar.jenis, gitar.ukuran, gitar.hasil ,gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis_satu);
        $builder->where('ukuran', $ukuran_satu);
        $builder->where('warna', $warna_satu);
        $builder->where('harga', $harga_satu);
        $builder->where('hasil', "Tidak");
        $data = $builder->get()->getResult();
        return $data;
    }
    public function getUkuranDisukaiData1($jenis, $ukuran, $warna, $harga)
    {
        $builder = $this->db->table("gitar");
        $builder->where('jenis', $jenis);
        $builder->where('ukuran', $ukuran);
        $builder->where('warna', $warna);
        $builder->where('harga', $harga);
        $builder->where('hasil', 'Disukai');
        $query = $builder->get();
        $data = $query->getResultArray();

        return $data;
    }
    public function filterByUkuranDisukai($data, $ukuran)
    {

        $result = array();

        foreach ($data as $row) {
            if (isset($row['ukuran']) && isset($row['hasil']) && $row['ukuran'] == $ukuran && $row['hasil'] == 'Disukai') {
                $result[] = $row;
            }
        }

        return $result;
    }
    // public function getUkuranDisukaidata1($ukuran)
    // {
    //     $builder = $this->db->table("gitar");
    //     $builder->where('ukuran', $ukuran);
    //     $builder->where('hasil', 'Disukai');
    //     $query = $builder->get();
    //     $data = $query->getResultArray();

    //     return $data;
    // }

    // cari data yang disukai
    public function getsuka()
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.hasil', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data yang tidak disukai
    public function gettidakdisukai()
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.hasil', "tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data jenis disukai
    public function getjenisdisukai($jenis)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.jenis=', $jenis);
        $builder->where('gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data jenis tidakdisukaidisukai
    public function getjenistidakdisukai($jenis)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.jenis', $jenis);
        $builder->where('gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data ukuran Disukai

    public function getukurandisukai($ukuran)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.ukuran', $ukuran);
        $builder->where('gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data warna tidak disukai
    public function getukurantidakdisukai($ukuran)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.ukuran', $ukuran);
        $builder->where('gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data warna yang disukai
    public function getwarnadisukai($warna)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.warna', $warna);
        $builder->where('gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data warna tidak disukai
    public function getwarnatidakdisukai($warna)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.warna', $warna);
        $builder->where('gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data harga disukai
    public function getukhargadisukai($harga)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.harga', $harga);
        $builder->where('gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data harga tidak disuakai
    public function gethargatidakdisukai($harga)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.harga', $harga);
        $builder->where('gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }

    ///revisisiiiii
    public function getnamabyid($id_gitar)
    {
        $builder = $this->db->table("gitar");
        $builder->where('gitar.harga', $id_gitar);
        $query = $builder->get();
        $result = $query->getRow();

        if ($result) {
            return $result->nama; // Mengembalikan nama gitar
        }

        return '';
    }
}
