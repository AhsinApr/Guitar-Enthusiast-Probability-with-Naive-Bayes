<?php

namespace App\Controllers;




use App\Libraries\PhpOffice\PhpSpreadsheet\Spreadsheet;

use App\PhpOffice\PhpSpreadsheet\PhpSpreadsheet\Writer\Xlsx;

use App\Models\GitarModel;
use App\Models\MerkModel;
use App\Models\ProsesGitarModel;
use PhpParser\Node\Expr\New_;

class User extends BaseController
{
    protected $GitarModel;
    protected $MerkModel;
    protected $ProsesGitarModel;

    private $db;
    public function __construct()
    {
        $this->GitarModel = new GitarModel();
        $this->MerkModel = new MerkModel();
        $this->ProsesGitarModel = new ProsesGitarModel();


        $this->db = \Config\Database::connect();
    }


    public function index()
    {
        return view('user/index');
    }
    public function menuutama()
    {
        return view('user/menuutama');
    }



    public function lihatproduk()
    {
        $gitar = $this->GitarModel->getByMerk();

        $data = [
            'title' => 'data artikel',
            'gitar' => $gitar
        ];
        // dd($data);
        return view('user/lihatproduk', $data);
    }
    public function tambahdata()
    {
        return view('user/tambahdata');
    }
    // Tampilan form inputan
    public function tambahmerk()
    {
        return view('user/tambahmerk');
    }
    //  ini save inputan
    public function save()
    {
        if (!$this->validate([
            'file' => 'uploaded[gambar]'
        ])) {
            return redirect()->to('/img')->withInput();
        };
        $filegambar = $this->request->getFile('gambar');
        $namafile = $filegambar->getRandomName();
        $filegambar->move('imggitar', $namafile);

        $id_merk = $this->request->getVar('id_merk');
        $id_gitar = $this->request->getVar('id_gitar');
        $nama = $this->request->getVar('nama');
        $ukuran = $this->request->getVar('ukuran');
        $jenis = $this->request->getVar('jenis');
        $harga = $this->request->getVar('harga');
        $warna = $this->request->getVar('warna');
        $hasil = $this->request->getVar('hasil');
        $gambar = $namafile;


        $data = [
            'id_gitar' => $id_gitar,
            'id_merk' => $id_merk,
            'nama' => $nama,
            'ukuran' => $ukuran,
            'jenis' => $jenis,
            'harga' => $harga,
            'warna' => $warna,
            'gambar' => $gambar,
            'hasil' => $hasil,

        ];
        // dd($data);

        $this->GitarModel->insert($data);
        session()->setFlashdata('pesan', 'Data berhasil Ditambahkan');
        return redirect()->to('user/editdata');
    }

    // ini ambil data yang akan diedit menggunakan id gitar
    public function editgitar($id_gitar)
    {
        $gitar = $this->GitarModel->getIdGitar($id_gitar);
        $data = [
            'title' => 'edit lapangan',
            'gitar' => $gitar
        ];
        return view('user/editgitar', $data);
        // dd($data);
    }
    // buat save form edit
    public function saveedit()
    {
        // validasi gambar
        if (!$this->validate([
            'file' => 'uploaded[gambar]'
        ])) {
            return redirect()->to('/img')->withInput();
        };
        $filegambar = $this->request->getFile('gambar');
        $namafile = $filegambar->getRandomName();
        $filegambar->move('imggitar', $namafile);
        $gambar = $namafile;
        $id_merk = $this->request->getVar('id_merk');
        $id_gitar = $this->request->getVar('id_gitar');
        $nama = $this->request->getVar('nama');
        $ukuran = $this->request->getVar('ukuran');
        $jenis = $this->request->getVar('jenis');
        $harga = $this->request->getVar('harga');

        $warna = $this->request->getVar('warna');
        $hasil = $this->request->getVar('hasil');

        $data = [
            'id_gitar' => $id_gitar,
            'id_merk' => $id_merk,
            'nama' => $nama,
            'ukuran' => $ukuran,
            'jenis' => $jenis,
            'harga' => $harga,
            'warna' => $warna,
            'gambar' => $gambar,
            'hasil' => $hasil,
        ];
        // dd($data);

        $this->GitarModel->replace($data);
        session()->setFlashdata('pesan', 'Data berhasil DiUpdate');
        return redirect()->to('user/editdata');
    }
    public function deletedata($id_gitar)
    {
        $gitar = $this->GitarModel->find($id_gitar);

        $this->GitarModel->delete($id_gitar);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus');
        return redirect()->to('user/editdata');
    }
    public function pilihgitarmurah()
    {
        return view('user/pilihgitarmurah');
    }
    public function pilihgitarterjangkau()
    {
        return view('user/pilihgitarterjangkau');
    }
    public function pilihgitarsuper()
    {
        return view('user/pilihgitarsuper');
    }
    public function editdata()
    {
        $gitar = $this->GitarModel->getByMerk();

        $data = [
            'title' => 'data artikel',
            'gitar' => $gitar
        ];
        // dd($data);
        return view('user/editdata', $data);
    }
    public function carigitar()
    {
        $id_merk = $this->request->getVar('id_merk');
        $gitar = $this->GitarModel->getGitarBymerk($id_merk);

        $data = [
            'title' => 'data artikel',
            'gitar' => $gitar

        ];
        return view('user/editdata', $data);
        // dd($data);
    }

    public function hargagitar()
    {
        return view('user/hargagitar');
    }
    public function nbview()
    {
        $gitar = $this->GitarModel->getGitar();

        $data = [
            'title' => 'data artikel',
            'gitar' => $gitar,
            'jmlReq' => $gitar,
        ];
        // dd($data);
        session()->setFlashdata('hasil', 'oke');

        return view('user/nbview', $data);
    }

    // ini function uji data menggunakan 50 data
    public function uji_data()
    {

        session()->setFlashdata('hasil', 'oke');
        //definisi inputan
        $jenis = $this->request->getVar('jenis');
        $warna = $this->request->getVar('warna');
        $ukuran = $this->request->getVar('ukuran');
        $harga = $this->request->getVar('harga');
        //mmencari data disukai data disukai
        $classsuka = $this->GitarModel->getsuka();
        $classtidaksuka = $this->GitarModel->gettidakdisukai();

        // menentukan probabilitas class
        $probabilitasdisukai = $classsuka / 50;
        $probabilitastidakdisukai = $classtidaksuka / 50;

        $disukai = 50 - $classtidaksuka;
        $tidakdisukai = 50 - $classsuka;

        //definisi katagori
        $ukurandisukai = $this->GitarModel->getukurandisukai($ukuran);
        $ukurantidakdisukai = $this->GitarModel->getukurantidakdisukai($ukuran);
        $jenisdisukai = $this->GitarModel->getjenisdisukai($jenis);
        $jenistidakdisukai = $this->GitarModel->getjenistidakdisukai($jenis);
        $warnadisukai = $this->GitarModel->getwarnadisukai($warna);
        $warnatidakdisukai = $this->GitarModel->getwarnatidakdisukai($warna);
        $hargadisukai = $this->GitarModel->getukhargadisukai($harga);
        $hargatidakdisukai = $this->GitarModel->gethargatidakdisukai($harga);


        //menentukan probabilitas katagori

        $probabilitasukurandisukai = $ukurandisukai / $disukai;
        $probabilitasukurantidakdisukai = $ukurantidakdisukai / $tidakdisukai;
        $probabilitasjenisdisukai = $jenisdisukai / $disukai;
        $probabilitasjenistidakdisukai = $jenistidakdisukai / $tidakdisukai;
        $probabilitaswarnadisukai = $warnadisukai / $disukai;
        $probabilitaswarnatidakdisukai = $warnatidakdisukai / $tidakdisukai;
        $probabilitashargadisukai = $hargadisukai / $disukai;
        $probabilitashargatidakdisukai = $hargatidakdisukai / $tidakdisukai;





        // masukan ke rumus

        $hasildisukai = $probabilitasdisukai * $probabilitasukurandisukai * $probabilitasjenisdisukai * $probabilitaswarnadisukai * $probabilitashargadisukai;
        $hasiltidakdisukai = $probabilitastidakdisukai * $probabilitasukurantidakdisukai * $probabilitasjenistidakdisukai * $probabilitaswarnatidakdisukai * $probabilitashargatidakdisukai;


        if ($hasiltidakdisukai > $hasildisukai) {
            $kesimpulan = 'Karena nilai tidak suka <i>Tidak</i>, lebih besar dari nilai suka  <i>Ya</i>. Maka class dari data X atau hasil dari data uji adalah <strong>Pengguna tidak menyukai gitar</strong>';
        } else if ($hasildisukai > $hasiltidakdisukai) {
            $kesimpulan = 'Karena nilai suka <i>Ya</i>, lebih besar dari tidak suka <i>Tidak</i>. Maka class dari Data X atau Hasil dari data Uji adalah <strong>Pengguna akan menyukai gitar </strong>';
        }
        $rekomendasi = $this->GitarModel->getGitarRekomendasi($jenis, $ukuran, $warna, $harga);
        // $akurasi1 = $array[$rekomendasi];
        $akurasi = count($rekomendasi);

        $data = [
            'judul' => 'Halaman Utama',
            // 'gitar' => $gitar,
            'jenis' => $jenis,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'harga' => $harga,
            'classsuka' => $classsuka,
            'classtidakdisukai' => $classtidaksuka,
            'disukai' => $disukai,
            'tidakdisukai' => $tidakdisukai,
            'ukurandisukai' => $ukurandisukai,
            'ukurantidakdisukai' => $ukurantidakdisukai,
            'jenisdisukai' => $jenisdisukai,
            'jenistidakdisukai' => $jenistidakdisukai,
            'warnadisukai' => $warnadisukai,
            'waranatidakdisukai' => $warnatidakdisukai,
            'hargadisukai' => $hargadisukai,
            'hargatidakdisukai' => $hargatidakdisukai,
            'probabilitasukurandisukai' => $probabilitasukurandisukai,
            'probabilitasukurantidakdisukai' => $probabilitasukurantidakdisukai,
            'probabilitasjenisdisukai' => $probabilitasjenisdisukai,
            'probabilitasjenistidakdisukai' => $probabilitasjenistidakdisukai,
            'probabilitaswarnadisukai' => $probabilitaswarnadisukai,
            'probabilitaswarnatidakdisukai' => $probabilitaswarnatidakdisukai,
            'probabilitashargadisukai' => $probabilitashargadisukai,
            'probabilitashargatidakdisukai' => $probabilitashargatidakdisukai,
            'hasildisukai' => $hasildisukai,
            'hasiltidakdisukai' => $hasiltidakdisukai,
            'kesimpulan' => $kesimpulan,
            'rekomendasi' => $rekomendasi,
            'probabilitassuka' => $probabilitasdisukai,
            'probabilitastidaksuka' => $probabilitastidakdisukai,
            'akurasi' => $akurasi

        ];
        // session()->setFlashdata('hasil', 'oke');
        // return view('user/nbview', $data);
        session()->setFlashdata('hasil', 'oke');
        return view('user/hasilnb', $data);

        // dd($data);
    }

    // ambil inputan
    public function ambildata()
    {
        $jenis = $this->request->getVar('jenis');
        $warna = $this->request->getVar('warna');
        $ukuran = $this->request->getVar('ukuran');
        $harga = $this->request->getVar('harga');
        $jenis_satu = $this->request->getVar('jenis1');
        $warna_satu = $this->request->getVar('warna1');
        $ukuran_satu = $this->request->getVar('ukuran1');
        $harga_satu = $this->request->getVar('harga1');
        $getdata = $this->GitarModel->getGitarRekomendasi($jenis, $ukuran, $warna, $harga);
        $getdata1 = $this->GitarModel->getGitarData($jenis_satu, $ukuran_satu, $warna_satu,  $harga_satu);
        $ambildisukaidata1 = $this->GitarModel->getGitarRekomendasisuka($jenis, $ukuran, $warna, $harga);
        $ambiltidakdisukaidata1 = $this->GitarModel->getGitarRekomendasitidak($jenis, $ukuran, $warna, $harga);
        $ambildisukaidata2 = $this->GitarModel->getGitarDatadisukai($jenis_satu, $ukuran_satu, $warna_satu, $harga_satu);
        $ambiltidakdisukaidata2 = $this->GitarModel->getGitarDataditidakdisukai($jenis_satu, $ukuran_satu, $warna_satu, $harga_satu);
        $countdata1disukai = count($ambildisukaidata1);
        $countdata1tidakdisukai = count($ambiltidakdisukaidata1);
        $countdata2disukai = count($ambildisukaidata2);
        $countdata2tidakdisukai = count($ambiltidakdisukaidata2);
        $classsuka = $countdata1disukai + $countdata2disukai;
        $classtidakdisukai = $countdata1tidakdisukai + $countdata2tidakdisukai;
        $countdata = count($getdata);
        $countdata1 = count($getdata1);
        $contentbased = $countdata + $countdata1;

        $cobagetdata = $this->GitarModel->getUkuranDisukaiData1($jenis, $ukuran, $warna, $harga);

        $datafilterukurandisukai = ['cobagetdata' => $cobagetdata];
        $hasilfilterukurandisukai = $this->GitarModel->filterByUkuranDisukai($datafilterukurandisukai, $ukuran,);
        $data = [
            'hasjagshjg' => $datafilterukurandisukai,

            'hasildilter' => $hasilfilterukurandisukai,
            'jenis' => $jenis,
            'ukuran' => $ukuran,
            'warna' => $warna,
            'harga' => $harga,
            'jenis1' => $jenis_satu,
            'ukuran1' => $ukuran_satu,
            'warna1' => $warna_satu,
            'harga1' => $harga_satu,
            'countdisukaidata1' => $countdata1disukai,
            'counttidakdisukaidata1' => $countdata1tidakdisukai,
            'countdisukaidata2' => $countdata2disukai,
            'counttidakdisukaidata2' => $countdata2tidakdisukai,
            'classsuka' => $classsuka,
            'classtidakdisukai' => $classtidakdisukai,
            'contentbased1' => $getdata,
            'contentbased2' => $getdata1,
            'contenbased' => $contentbased
        ];
        return view('user/hasilseleksi', $data);
        // dd($data);
    }
    // ini function Uji data menggunakan data content based 
    public function uji_datanb()
    {

        session()->setFlashdata('hasil', 'oke');
        //definisi inputan
        $totalsuka = $this->request->getVar('totalsuka');
        $totaltidak = $this->request->getVar('totaltidak');
        $totaldata = $this->request->getVar('totaldata');
        $jenis = $this->request->getVar('jenis');
        $warna = $this->request->getVar('warna');
        $ukuran = $this->request->getVar('ukuran');
        $harga = $this->request->getVar('harga');
        //mmencari data disukai data disukai

        // menentukan probabilitas class
        $probabilitasdisukai = $totalsuka / $totaldata;
        $probabilitastidakdisukai = $totaltidak / $totaldata;

        $disukai = $totaldata - $totaltidak;
        $tidakdisukai = $totaldata - $totalsuka;

        //definisi katagori menggunakan 50data

        $ukurandisukai = $this->GitarModel->getukurandisukai($ukuran);
        $ukurantidakdisukai = $this->GitarModel->getukurantidakdisukai($ukuran);
        $jenisdisukai = $this->GitarModel->getjenisdisukai($jenis);
        $jenistidakdisukai = $this->GitarModel->getjenistidakdisukai($jenis);
        $warnadisukai = $this->GitarModel->getwarnadisukai($warna);
        $warnatidakdisukai = $this->GitarModel->getwarnatidakdisukai($warna);
        $hargadisukai = $this->GitarModel->getukhargadisukai($harga);
        $hargatidakdisukai = $this->GitarModel->gethargatidakdisukai($harga);

        //menentukan probabilitas katagori

        $probabilitasukurandisukai = $ukurandisukai / $disukai;
        $probabilitasukurantidakdisukai = $ukurantidakdisukai / $tidakdisukai;
        $probabilitasjenisdisukai = $jenisdisukai / $disukai;
        $probabilitasjenistidakdisukai = $jenistidakdisukai / $tidakdisukai;
        $probabilitaswarnadisukai = $warnadisukai / $disukai;
        $probabilitaswarnatidakdisukai = $warnatidakdisukai / $tidakdisukai;
        $probabilitashargadisukai = $hargadisukai / $disukai;
        $probabilitashargatidakdisukai = $hargatidakdisukai / $tidakdisukai;


        // masukan ke rumus

        $hasildisukai = $probabilitasdisukai * $probabilitasukurandisukai * $probabilitasjenisdisukai * $probabilitaswarnadisukai * $probabilitashargadisukai;
        $hasiltidakdisukai = $probabilitastidakdisukai * $probabilitasukurantidakdisukai * $probabilitasjenistidakdisukai * $probabilitaswarnatidakdisukai * $probabilitashargatidakdisukai;


        if ($hasiltidakdisukai > $hasildisukai) {
            $kesimpulan = 'Karena nilai tidak suka <i>Tidak</i>, lebih besar dari nilai suka  <i>Ya</i>. Maka class dari data X atau hasil dari data uji adalah <strong>Pengguna tidak menyukai gitar</strong>';
        } else if ($hasildisukai > $hasiltidakdisukai) {
            $kesimpulan = 'Karena nilai suka <i>Ya</i>, lebih besar dari tidak suka <i>Tidak</i>. Maka class dari Data X atau Hasil dari data Uji adalah <strong>Pengguna akan menyukai gitar </strong>';
        }
        $rekomendasi = $this->GitarModel->getGitarRekomendasi($jenis, $ukuran, $warna, $harga);
        // $akurasi1 = $array[$rekomendasi];
        $akurasi = count($rekomendasi);

        $data = [
            'judul' => 'Halaman Utama',
            // 'gitar' => $gitar,
            'totaldata' => $totaldata,
            'totalsuka' => $totalsuka,
            'totaltidak' => $totaltidak,
            'jenis' => $jenis,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'harga' => $harga,
            'disukai' => $disukai,
            'tidakdisukai' => $tidakdisukai,
            'ukurandisukai' => $ukurandisukai,
            'ukurantidakdisukai' => $ukurantidakdisukai,
            'jenisdisukai' => $jenisdisukai,
            'jenistidakdisukai' => $jenistidakdisukai,
            'warnadisukai' => $warnadisukai,
            'waranatidakdisukai' => $warnatidakdisukai,
            'hargadisukai' => $hargadisukai,
            'hargatidakdisukai' => $hargatidakdisukai,
            'probabilitasukurandisukai' => $probabilitasukurandisukai,
            'probabilitasukurantidakdisukai' => $probabilitasukurantidakdisukai,
            'probabilitasjenisdisukai' => $probabilitasjenisdisukai,
            'probabilitasjenistidakdisukai' => $probabilitasjenistidakdisukai,
            'probabilitaswarnadisukai' => $probabilitaswarnadisukai,
            'probabilitaswarnatidakdisukai' => $probabilitaswarnatidakdisukai,
            'probabilitashargadisukai' => $probabilitashargadisukai,
            'probabilitashargatidakdisukai' => $probabilitashargatidakdisukai,
            'hasildisukai' => $hasildisukai,
            'hasiltidakdisukai' => $hasiltidakdisukai,
            'kesimpulan' => $kesimpulan,
            'rekomendasi' => $rekomendasi,
            'probabilitassuka' => $probabilitasdisukai,
            'probabilitastidaksuka' => $probabilitastidakdisukai,
            'akurasi' => $akurasi

        ];
        // session()->setFlashdata('hasil', 'oke');
        // return view('user/nbview', $data);
        session()->setFlashdata('hasil', 'oke');
        return view('user/hasilnb', $data);

        // dd($data);
    }
    ///revisi baru
    public function contentbased()
    {
        $contentbased = $this->GitarModel->findAll();
        $data = [
            'contentbased' => $contentbased,
        ];

        // dd($data);
        return view('user/datagitar', $data);
    }
    public function prosesBatch()
    {
        $ProsesGitarModel = new ProsesGitarModel();

        $id_gitar = $this->request->getPost('id_gitar');
        $nama = $this->request->getPost('nama');
        $hasil = $this->request->getPost('hasil');
        $id_merk = $this->request->getPost('id_merk');
        $warna = $this->request->getPost('warna');
        $jenis = $this->request->getPost('jenis');
        $ukuran = $this->request->getPost('ukuran');
        $harga = $this->request->getPost('harga');
        $gambar = $this->request->getPost('gambar');
        $status = $this->request->getPost('status');

        $data = [];
        foreach ($id_gitar as $index => $id) {
            $data[] = [
                'status' => $status[$index],
                'id_gitar' => $id_gitar[$index],
                'hasil' => $hasil[$id], // Mengambil hasil berdasarkan id
                'nama' => $nama[$index],
                'id_merk' => $id_merk[$index],
                'warna' => $warna[$index],
                'jenis' => $jenis[$index],
                'ukuran' => $ukuran[$index],
                'harga' => $harga[$index],
                'gambar' => $gambar[$index],
            ];
        }

        // dd($data);
        $ProsesGitarModel->insertBatch($data);
        session()->setFlashdata('hasil', 'oke');
        return redirect()->to('user/hitungdata');
        // Tambahkan pesan keberhasilan jika diperlukan
    }
    public function hitungdata()
    {
        $datacari = $this->ProsesGitarModel->getcari(1);
        $datadisukai = $this->ProsesGitarModel->getsuka();
        $datatidakdisukai = $this->ProsesGitarModel->gettidakdisukai();
        $totaldata = $datadisukai + $datatidakdisukai + 1;
        $data = [
            'datacari' => $datacari,
            'datadisukai' => $datadisukai,
            'datatidakdisukai' => $datatidakdisukai,
            'totaldata' => $totaldata,
        ];
        // dd($data);
        return view('user/formhitungdata', $data);
    }
    public function mulaihitungdata()
    {
        session()->setFlashdata('hasil', 'oke');
        //definisi inputan
        $totalsuka = $this->request->getVar('totalsuka');
        $totaltidak = $this->request->getVar('totaltidak');
        $totaldata = $this->request->getVar('totaldata');
        $jenis = $this->request->getVar('jenis');
        $warna = $this->request->getVar('warna');
        $ukuran = $this->request->getVar('ukuran');
        $harga = $this->request->getVar('harga');
        $probabilitasdisukai = $totalsuka / $totaldata;
        $probabilitastidakdisukai = $totaltidak / $totaldata;

        $disukai = $totaldata - $totaltidak;
        $tidakdisukai = $totaldata - $totalsuka;
        $ukurandisukai = $this->ProsesGitarModel->getukurandisukai($ukuran);
        $ukurantidakdisukai = $this->ProsesGitarModel->getukurantidakdisukai($ukuran);
        $jenisdisukai = $this->ProsesGitarModel->getjenisdisukai($jenis);
        $jenistidakdisukai = $this->ProsesGitarModel->getjenistidakdisukai($jenis);
        $warnadisukai = $this->ProsesGitarModel->getwarnadisukai($warna);
        $warnatidakdisukai = $this->ProsesGitarModel->getwarnatidakdisukai($warna);
        $hargadisukai = $this->ProsesGitarModel->getukhargadisukai($harga);
        $hargatidakdisukai = $this->ProsesGitarModel->gethargatidakdisukai($harga);
        $probabilitasukurandisukai = $ukurandisukai / $disukai;
        $probabilitasukurantidakdisukai = $ukurantidakdisukai / $tidakdisukai;
        $probabilitasjenisdisukai = $jenisdisukai / $disukai;
        $probabilitasjenistidakdisukai = $jenistidakdisukai / $tidakdisukai;
        $probabilitaswarnadisukai = $warnadisukai / $disukai;
        $probabilitaswarnatidakdisukai = $warnatidakdisukai / $tidakdisukai;
        $probabilitashargadisukai = $hargadisukai / $disukai;
        $probabilitashargatidakdisukai = $hargatidakdisukai / $tidakdisukai;
        $hasildisukai = $probabilitasdisukai * $probabilitasukurandisukai * $probabilitasjenisdisukai * $probabilitaswarnadisukai * $probabilitashargadisukai;
        $hasiltidakdisukai = $probabilitastidakdisukai * $probabilitasukurantidakdisukai * $probabilitasjenistidakdisukai * $probabilitaswarnatidakdisukai * $probabilitashargatidakdisukai;
        if ($hasiltidakdisukai > $hasildisukai) {
            $kesimpulan = 'Karena nilai tidak suka <i>Tidak</i>, lebih besar dari nilai suka  <i>Ya</i>. Maka class dari data X atau hasil dari data uji adalah <strong>Pengguna tidak menyukai gitar</strong>';
        } else if ($hasildisukai > $hasiltidakdisukai) {
            $kesimpulan = 'Karena nilai suka <i>Ya</i>, lebih besar dari tidak suka <i>Tidak</i>. Maka class dari Data X atau Hasil dari data Uji adalah <strong>Pengguna akan menyukai gitar </strong>';
        }
        $rekomendasi = $this->GitarModel->getGitarRekomendasi($jenis, $ukuran, $warna, $harga);
        // $akurasi1 = $array[$rekomendasi];
        $akurasi = count($rekomendasi);

        $data = [
            'totaldata' => $totaldata,
            'totalsuka' => $totalsuka,
            'totaltidak' => $totaltidak,
            'jenis' => $jenis,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'harga' => $harga,
            'disukai' => $disukai,
            'tidakdisukai' => $tidakdisukai,
            'ukurandisukai' => $ukurandisukai,
            'ukurantidakdisukai' => $ukurantidakdisukai,
            'jenisdisukai' => $jenisdisukai,
            'jenistidakdisukai' => $jenistidakdisukai,
            'warnadisukai' => $warnadisukai,
            'waranatidakdisukai' => $warnatidakdisukai,
            'hargadisukai' => $hargadisukai,
            'hargatidakdisukai' => $hargatidakdisukai,
            'probabilitasukurandisukai' => $probabilitasukurandisukai,
            'probabilitasukurantidakdisukai' => $probabilitasukurantidakdisukai,
            'probabilitasjenisdisukai' => $probabilitasjenisdisukai,
            'probabilitasjenistidakdisukai' => $probabilitasjenistidakdisukai,
            'probabilitaswarnadisukai' => $probabilitaswarnadisukai,
            'probabilitaswarnatidakdisukai' => $probabilitaswarnatidakdisukai,
            'probabilitashargadisukai' => $probabilitashargadisukai,
            'probabilitashargatidakdisukai' => $probabilitashargatidakdisukai,
            'hasildisukai' => $hasildisukai,
            'hasiltidakdisukai' => $hasiltidakdisukai,
            'kesimpulan' => $kesimpulan,
            'rekomendasi' => $rekomendasi,
            'probabilitassuka' => $probabilitasdisukai,
            'probabilitastidaksuka' => $probabilitastidakdisukai,
            'akurasi' => $akurasi

        ];
        session()->setFlashdata('hasil', 'oke');
        return view('user/hasilnb', $data);
    }
    public function hapusSemuaData()
    {
        $ProsesGitarModel = new \App\Models\ProsesGitarModel();

        // Hapus semua data dari tabel
        $ProsesGitarModel->truncate();

        return redirect()->to('/user/menuutama');
    }
}
