<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilModel extends Model
{
    use HasFactory;
    protected $primaryKey= 'id';
    protected $table = 'tb_mobil';
    protected $fillable = [
        'id',
        'merk_mobil',
        'type_mobil',
        'warna',
        'stok',
        'harga',
        'image'
    ];
}
