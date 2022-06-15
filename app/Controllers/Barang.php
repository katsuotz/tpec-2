<?php

namespace App\Controllers;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new \App\Models\Barang();
    }

    public function index()
    {
        return view('admin/barang/data', [
            'data' => $this->barangModel->getBarang(),
        ]);
    }

    public function detail($slug)
    {
        return view('barang/detail', [
            'barang' => $this->barangModel->getBarang($slug),
        ]);
    }

    public function create()
    {
        $data = [
            'title' => "Form Data Barang"
        ];
        return view('admin/barang/tambah', $data);
    }

    public function store()
    {
        $validate = $this->validate([
            'judul' => 'required|is_unique[barang.nama_barang]'
        ]);

        if (!$validate) return redirect()->to('/backend/barang/tambah');

        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->barangModel->save([
            'nama_barang' => $this->request->getVar('nama'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'warna' => $this->request->getVar('warna'),
            'ukuran' => $this->request->getVar('ukuran'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Disimpan');

        return redirect()->to('/backend/barang');
    }
}
