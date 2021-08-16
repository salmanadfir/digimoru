<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang', 'harga', 'stok', 'keterangan', 'gambar', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\User','barang_id','id');
    }
}
