<?php

namespace App\Controllers;

class backupcontroller extends BaseController
{
    public function index()
    {
        return view('user/index');
    }
    public function menuutama()
    {
        return view('user/menuutama');
    }
}
 // public function carikurangdarisatujuta()
    // {
    //     $jenis = $this->request->getVar('jenis');
    //     $warna = $this->request->getVar('warna');
    //     $ukuran = $this->request->getVar('ukuran');

    //     $data = [
    //         'jenis' => $jenis,
    //         'warna' => $warna,
    //         'ukuran' => $ukuran,


    //     ];

    //     $query = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, merk FROM gitar inner join merk on gitar.id_merk = merk.id_merk
    //     WHERE jenis = '$jenis' and warna ='$warna' and ukuran ='$ukuran' 
    //    and harga < 1000000 ORDER BY gitar.id_merk ASC");
    //     $data['gitar'] = $query->getResult();
    //     return view('user/hasilpencarian', $data);
    // }
    // public function carikurangdariduajuta()
    // {
    //     // $this->GitarModel->getsuka($jenis, $ukuran);

    //     $jenis = $this->request->getVar('jenis');
    //     // $warna = $this->request->getVar('warna');
    //     $ukuran = $this->request->getVar('ukuran');
    //     // $jenis2 = $this->request->getVar('jenis2');
    //     // $warna2 = $this->request->getVar('warna2');
    //     // $ukuran2 = $this->request->getVar('ukuran2');
    //     $jenissuka = $this->GitarModel->getsuka();
    //     $hasilperkalian = $jenissuka / 2;

    //     $data = [
    //         'jenis' => $jenis,

    //         'ukuran' => $ukuran,
    //         'jenissuka' => $jenissuka,
    //         'hasilperkalian' => $hasilperkalian



    //     ];

    //     // $data['hasil'] = $this->GitarModel->getsuka($jenis, $ukuran);



    //     // = $this->UserModel->getByusername($data);




    //     // $gitar = $this->GitarModel->getByMerk();
    //     // $query = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, id_merk FROM gitar
    //     //  WHERE jenis ='$jenis'and ukuran ='$ukuran'and harga='Terjangkau' 
    //     // ");
    //     // $query2 = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, id_merk FROM gitar
    //     //  WHERE jenis = '$jenis2' and warna ='$warna2' and ukuran ='$ukuran' 
    //     // and harga ='Terjangaku' ORDER BY gitar.id_merk ASC");

    //     // $query3 = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, id_merk FROM gitar
    //     // WHERE  harga NOT LIKE 'Super' and harga NOT LIKE 'murah' and jenis NOT LIKE '%Akustik Elektik%'");
    //     // $query4 = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, id_merk FROM gitar
    //     // WHERE harga ='Terjangkau'and jenis NOT LIKE '$jenis2'");

    //     // $data['gitar'] = $query->getResult();
    //     // // $data['gitar2'] = $query2->getResult();
    //     // $data['gitar3'] = $query3->getResult();
    //     // $data['gitar4'] = $query4->getResult();

    //     // return view('user/hasilpencarian', $data);
    //     dd($data);
    //     // var_dump($data);
    // }
    // public function carilebihdariduajuta()
    // {
    //     $jenis = $this->request->getVar('jenis');
    //     $warna = $this->request->getVar('warna');
    //     $ukuran = $this->request->getVar('ukuran');

    //     $data = [
    //         'jenis' => $jenis,
    //         'warna' => $warna,
    //         'ukuran' => $ukuran,


    //     ];

    //     $query = $this->db->query("SELECT nama, jenis, ukuran, warna, harga, merk FROM gitar inner join merk on gitar.id_merk = merk.id_merk
    //     WHERE jenis = '$jenis' and warna ='$warna' and ukuran ='$ukuran' 
    //    and harga > 2000000 ORDER BY gitar.id_merk ASC");
    //     $data['gitar'] = $query->getResult();
    //     return view('user/hasilpencarian', $data);
    // }











// public function uji_dataaction()
// {

// session()->setFlashdata('hasil', 'oke');

// //definisi inputan

// $jenis = $this->request->getVar('jenis');
// $warna = $this->request->getVar('warna');
// $ukuran = $this->request->getVar('ukuran');
// $harga = $this->request->getVar('harga');
// //mmencari data disukai data disukai
// $classsuka = $this->GitarModel->getsuka();
// $classtidaksuka = $this->GitarModel->gettidakdisukai();

// // menentukan probabilitas class
// $probabilitasdisukai = $classsuka / 50;
// $probabilitastidakdisukai = $classtidaksuka / 50;

// $disukai = 50 - $classtidaksuka;
// $tidakdisukai = 50 - $classsuka;

// //definisi katagori
// $ukurandisukai = $this->GitarModel->getukurandisukai($ukuran);
// $ukurantidakdisukai = $this->GitarModel->getukurantidakdisukai($ukuran);
// $jenisdisukai = $this->GitarModel->getjenisdisukai($jenis);
// $jenistidakdisukai = $this->GitarModel->getjenistidakdisukai($jenis);
// $warnadisukai = $this->GitarModel->getwarnadisukai($warna);
// $warnatidakdisukai = $this->GitarModel->getwarnatidakdisukai($warna);
// $hargadisukai = $this->GitarModel->getukhargadisukai($harga);
// $hargatidakdisukai = $this->GitarModel->gethargatidakdisukai($harga);


// //menentukan probabilitas katagori

// $probabilitasukurandisukai = $ukurandisukai / $disukai;
// $probabilitasukurantidakdisukai = $ukurantidakdisukai / $tidakdisukai;
// $probabilitasjenisdisukai = $jenisdisukai / $disukai;
// $probabilitasjenistidakdisukai = $jenistidakdisukai / $tidakdisukai;
// $probabilitaswarnadisukai = $warnadisukai / $disukai;
// $probabilitaswarnatidakdisukai = $warnatidakdisukai / $tidakdisukai;
// $probabilitashargadisukai = $hargadisukai / $disukai;
// $probabilitashargatidakdisukai = $hargatidakdisukai / $tidakdisukai;





// // masukan ke rumus

// $hasildisukai = $probabilitasdisukai * $probabilitasukurandisukai * $probabilitasjenisdisukai * $probabilitaswarnadisukai * $probabilitashargadisukai;
// $hasiltidakdisukai = $probabilitastidakdisukai * $probabilitasukurantidakdisukai * $probabilitasjenistidakdisukai * $probabilitaswarnatidakdisukai * $probabilitashargatidakdisukai;


// if ($hasiltidakdisukai > $hasildisukai) {
// $kesimpulan = 'Karena nilai tidak suka <i>Tidak</i>, lebih besar dari nilai suka <i>Ya</i>. Maka class dari data X atau hasil dari data uji adalah <strong>Pengguna tidak menyukai gitar</strong>';
// } else if ($hasildisukai > $hasiltidakdisukai) {
// $kesimpulan = 'Karena nilai suka <i>Ya</i>, lebih besar dari tidak suka <i>Tidak</i>. Maka class dari Data X atau Hasil dari data Uji adalah <strong>Pengguna akan menyukai gitar </strong>';
// }
// $rekomendasi = $this->GitarModel->getGitarRekomendasi($jenis, $ukuran, $warna, $harga);
// // $akurasi1 = $array[$rekomendasi];
// $akurasi = count($rekomendasi);

// $data = [
// 'judul' => 'Halaman Utama',
// // 'gitar' => $gitar,
// 'jenis' => $jenis,
// 'warna' => $warna,
// 'ukuran' => $ukuran,
// 'harga' => $harga,
// 'classsuka' => $classsuka,
// 'classtidakdisukai' => $classtidaksuka,
// 'disukai' => $disukai,
// 'tidakdisukai' => $tidakdisukai,
// 'ukurandisukai' => $ukurandisukai,
// 'ukurantidakdisukai' => $ukurantidakdisukai,
// 'jenisdisukai' => $jenisdisukai,
// 'jenistidakdisukai' => $jenistidakdisukai,
// 'warnadisukai' => $warnadisukai,
// 'waranatidakdisukai' => $warnatidakdisukai,
// 'hargadisukai' => $hargadisukai,
// 'hargatidakdisukai' => $hargatidakdisukai,
// 'probabilitasukurandisukai' => $probabilitasukurandisukai,
// 'probabilitasukurantidakdisukai' => $probabilitasukurantidakdisukai,
// 'probabilitasjenisdisukai' => $probabilitasjenisdisukai,
// 'probabilitasjenistidakdisukai' => $probabilitasjenistidakdisukai,
// 'probabilitaswarnadisukai' => $probabilitaswarnadisukai,
// 'probabilitaswarnatidakdisukai' => $probabilitaswarnatidakdisukai,
// 'probabilitashargadisukai' => $probabilitashargadisukai,
// 'probabilitashargatidakdisukai' => $probabilitashargatidakdisukai,
// 'hasildisukai' => $hasildisukai,
// 'hasiltidakdisukai' => $hasiltidakdisukai,
// 'kesimpulan' => $kesimpulan,
// 'rekomendasi' => $rekomendasi,
// 'probabilitassuka' => $probabilitasdisukai,
// 'probabilitastidaksuka' => $probabilitastidakdisukai,
// 'akurasi' => $akurasi

// ];
// // session()->setFlashdata('hasil', 'oke');
// // return view('user/nbview', $data);
// session()->setFlashdata('hasil', 'oke');
// return view('user/hasilnb', $data);

// // dd($data);
// }