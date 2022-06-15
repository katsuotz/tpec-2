<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_barang', 'slug', 'harga', 'warna', 'ukuran', 'deskripsi', 'gambar'];

    public function getBarang($slug = null)
    {
        if ($slug) return $this->where('slug', $slug)->first();
        return $this->findAll();
    }
}
