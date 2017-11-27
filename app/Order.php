<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Order extends Model
{
    public $timestamps=false;
    protected $fillable = [
        'id_order','nama', 'alamat','no_telp','email','kode_pos','jenis_sepatu','jenis_bahan','service1','service2','service3','warna','jumlah_sepatu','layanan_tambahan',
    ];

    

	
}
