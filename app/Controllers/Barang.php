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
}
