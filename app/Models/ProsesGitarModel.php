<?php

namespace App\Models;

use CodeIgniter\Model;

class ProsesGitarModel extends Model
{
    protected $table = "proses_gitar";
    protected $primaryKey = "id_proses";
    protected $returnType = 'object';
    protected $useTimestamps = false;
    protected $allowedFields = ['id_proses', 'id_gitar', 'status', 'nama', 'id_merk', 'warna', 'jenis', 'ukuran', 'harga', 'gambar', 'hasil'];
    public function getcari()
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('hasil', "Dicari");
        $builder->where('status', 1);
        $query = $builder->get(); // Eksekusi kueri

        $data = $query->getResult();
        // $data = $builder->countAllResults();
        return $data;
    }
    public function getsuka()
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('hasil', "Disukai");
        $builder->where('status', 1);
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data yang tidak disukai
    public function gettidakdisukai()
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('hasil', "Tidak");
        $builder->where('status', 1);

        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data jenis disukai
    public function getjenisdisukai($jenis)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.jenis=', $jenis);
        $builder->where('proses_gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data jenis tidakdisukaidisukai
    public function getjenistidakdisukai($jenis)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.jenis', $jenis);
        $builder->where('proses_gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data ukuran Disukai

    public function getukurandisukai($ukuran)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.ukuran', $ukuran);
        $builder->where('proses_gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data warna tidak disukai
    public function getukurantidakdisukai($ukuran)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.ukuran', $ukuran);
        $builder->where('proses_gitar.hasil=', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data warna yang disukai
    public function getwarnadisukai($warna)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.warna', $warna);
        $builder->where('proses_gitar.hasil=', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data warna tidak disukai
    public function getwarnatidakdisukai($warna)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.warna', $warna);
        $builder->where('proses_gitar.hasil', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    // cari data harga disukai
    public function getukhargadisukai($harga)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.harga', $harga);
        $builder->where('proses_gitar.hasil', "Disukai");
        $data = $builder->countAllResults();
        return $data;
    }
    //  cari data harga tidak disuakai
    public function gethargatidakdisukai($harga)
    {
        $builder = $this->db->table("proses_gitar");
        $builder->where('proses_gitar.harga', $harga);
        $builder->where('proses_gitar.hasil', "Tidak");
        $data = $builder->countAllResults();
        return $data;
    }
    public function getGitarRekomendasi($jenis, $ukuran, $warna, $harga)
    {

        $builder = $this->db->table("proses_gitar");
        $builder->select('proses_gitar.id_merk, proses_gitar.id_gitar, proses_gitar.harga,proses_gitar.gambar, proses_gitar.nama, proses_gitar.warna, proses_gitar.jenis, proses_gitar.ukuran, proses_gitar.hasil ,proses_gitar.gambar');
        // $builder->join('merk', 'merk.id_merk= gitar.id_merk', "left");
        $builder->where('jenis', $jenis);
        $builder->where('ukuran', $ukuran);
        $builder->where('warna', $warna);
        $builder->where('harga', $harga);
        $data = $builder->get()->getResult();
        return $data;
    }
}
