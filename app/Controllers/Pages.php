<?php

namespace App\Controllers;

use App\Models\GuruModel;
class Pages extends BaseController
{
    protected $GuruModel;
    public function __construct(){
        $this->GuruModel = new GuruModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | Latihan'
        ];
        return view('pages/home', $data);
        // echo "Hello Word";
    }


    public function data_guru(){
        // $guru = $this->GuruModel->getGuru();
        $data = [
            'title' => 'Data Guru | Latihan',
            'guru' => $this->GuruModel->getGuru()
        ];

        // $GuruModel = new \App\Models\GuruModel();

        
        // dd($guru);
        // $db = \Config\Database::connect();
        // $guru = $db->query("SELECT * FROM data_guru");
        // foreach($guru->getResultArray() as $row){
        //     dd($row);
        // }
        
        return view('pages/data_guru', $data);
        // echo "Hello Word";
    }
    public function data_ruangan(){
        $data = [
            'title' => 'Data Ruangan | Latihan'
        ];
        return view('pages/data_ruangan', $data);
        // echo "Hello Word";
    }
    public function kelas(){
        $data = [
            'title' => 'Data Kelas | Latihan'
        ];
        return view('pages/kelas', $data);
        // echo "Hello Word";
    }
    public function jadwal_hari(){
        $data = [
            'title' => 'Data Jadwal Hari | Latihan'
        ];
        return view('pages/jadwal_hari', $data);
        // echo "Hello Word";
    }
    public function mata_pelajaran(){
        $data = [
            'title' => 'Data Mata Pelajaran | Latihan'
        ];
        return view('pages/mata_pelajaran', $data);
        // echo "Hello Word";
    }

    public function create(){
        $data = [
            'title' => 'From Tambah Data',

        ];
        return view('pages/create', $data);
    }


    public function detail($sluge)
    {
        $data = [
            'title' => "Detail Guru",
            'guru' => $this->GuruModel->getGuru($sluge)
        ];

        // if(empty($data['data_guru'])){
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Guru'. $sluge .' Tidak Ditemukan');
        // }
       return view('pages/detail', $data);

    }

    public function save()
    {
        $this->GuruModel->save([
            'id_guru' => $this->request->getVar('id_guru'),
            'nama_guru' => $this->request->getVar('nama_guru'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telepon' => $this->request->getVar('no_telepon'),
            'gambar' => $this->request->getVar('gambar')
        ]);
    
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/pages/data_guru');
    }
    
}
