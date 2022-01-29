<?php

namespace App\Models;

use CodeIgniter\Model;

class sukabacaModel extends Model
{
    protected $table      = 'sukabaca';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];


    public function getbuku($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }


        return $this->where(['slug' => $slug])->first();
    }
}
