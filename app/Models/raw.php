<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raw extends Model
{
    use HasFactory;
    protected $fillable = ['id_master_categorie', 'no_surat_jalan', 'jumlah', 'tanggal'];
    protected $table = 'raw';
}
