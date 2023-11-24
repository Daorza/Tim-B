<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obats';
    protected $primaryKey = 'id_obat';
    protected $fillable = [
        'nama_obat',
        'harga',
        'stok',
    ];
}
