<?php

namespace App\Models;

use CodeIgniter\Model;

class MJasa extends Model
{
    protected $table = 'jasa';
    protected $primaryKey = 'id_jasa';
    protected $allowedFields = ['nama_jasa', 'harga', 'nama_pegawai'];
}