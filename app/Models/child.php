<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'nama_supplier', 'jumlah'];
    protected $table = 'child';
}

