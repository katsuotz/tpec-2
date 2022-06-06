<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model {
    protected $table = 'barang';
    protected $useTimestamps = true;

    public function getBarang($slug = null)
    {
        if ($slug) return $this->where('slug', $slug)->first();
        return $this->findAll();
    }
}
