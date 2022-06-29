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
        $validation = \Config\Services::validation();

        $data = [
            'title' => "Form Data Barang",
            'validation' => $validation,
        ];

        return view('admin/barang/tambah', $data);
    }

    public function store()
    {
        $validate = $this->validate([
            'nama' => [
                'rules' => 'required|is_unique[barang.nama_barang]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} tidak boleh sama dengan data yang sudah ada'
                ],
            ],
            'harga' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $validation = \Config\Services::validation();

        if (!$validate)
            return redirect()->to('/backend/barang/tambah')->withInput()->with('validation', $validation);

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

    public function edit($slug)
    {
        $validation = \Config\Services::validation();

        $data = [
            'title' => "Form Data Barang",
            'validation' => $validation,
            'barang' => $this->barangModel->getBarang($slug),
        ];

        return view('admin/barang/tambah', $data);
    }

    public function update($id)
    {
        $validate = $this->validate([
            'nama' => [
                'rules' => 'required|is_unique[barang.nama_barang,id,' . $id .']',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'is_unique' => '{field} tidak boleh sama dengan data yang sudah ada'
                ],
            ],
            'harga' => 'required',
            'warna' => 'required',
            'ukuran' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);

        $validation = \Config\Services::validation();

        if (!$validate)
            return redirect()->back()->withInput()->with('validation', $validation);

        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->barangModel->save([
            'id' => $id,
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

    public function destroy($id)
    {
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to('/backend/barang');
    }
}
