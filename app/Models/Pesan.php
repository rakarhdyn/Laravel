<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pemesan', 'email', 'no_tlp', 'nama_paket', 'harga'
    ];
}
