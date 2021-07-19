<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = "tb_kategori"; 
    protected $primaryKey = 'kategori_id';  
    protected $fillable = ['kategori_nama', 'kategori_keterangan'];
    
}
