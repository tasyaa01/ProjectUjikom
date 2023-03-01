<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Berita;

class Kategori extends Model
{
    use HasFactory;

    public function berita()
    {
        return $this->belongsTo(Berita::class,'kategori_id');
    }
}
