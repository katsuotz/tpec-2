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
        $barang = $this->barangModel->findAll();
        return view('admin/barang/data', [
            'data' => $barang,
        ]);
    }
}
