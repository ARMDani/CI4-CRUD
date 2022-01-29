<?php

namespace App\Controllers;

use App\Models\sukabacaModel;

class buku extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new sukabacaModel();
    }
    public function index()
    {
        // $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getbuku()
        ];



        return view('buku/index', $data);
    }


    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getbuku($slug)
        ];
        //jika buku tidak ada ditabel 

        if (empty($data['buku'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Buku ' . $slug . 'Tidak Ditemukan.');
        }


        return view('buku/detail', $data);
    }


    public function create()
    {

        // session();
        $data = [
            'title' => 'Form Tambah Data Buku',
            'validation' => \Config\Services::validation()
        ];

        return view('buku/create', $data);
    }

    // fungsi method save ini untuk mengelola data yang dikirim dari create untuk di insert kedalam tabel
    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[sukabaca.judul]',
                'errors' => [
                    'required' => 'Harap {field} bukunya diisi saudara.',
                    'is_unique' => '{field} buku ini, sudah ada saudara. Harap isi {field} buku yang baru.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/buku/create')->withInput();
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')

        ]);
        // ini adalah flasdata merupakan data didalam sesion yang hanya muncul satu kali
        session()->setFlashdata('pesan', 'Koleksi buku anda telah bertambah.');

        return redirect()->to('/buku');
    }


    public function delete($id)
    {
        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Buku berhasil dihapus dan Koleksi buku anda berkurang.');
        return redirect()->to('/buku');
    }



    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getbuku($slug)

        ];

        return view('buku/edit', $data);
    }




    public function update($id)
    {
        //cek judulnya
        $bukulama = $this->bukuModel->getbuku($this->request->getVar('slug'));
        if ($bukulama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[sukabaca.judul]';
        }
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Harap {field} bukunya diisi saudara.',
                    'is_unique' => '{field} buku ini, sudah ada saudara. Harap isi {field} buku yang baru.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/buku/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')

        ]);
        // ini adalah flasdata merupakan data didalam sesion yang hanya muncul satu kali
        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/buku');
    }
}
