<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Berita extends Model
{
    use HasFactory;
    public $fillable = ['judul', 'subjudul','kategori_id','isi','foto'];

    public function kategori()
    {
        return $this->hasOne(Kategori::class,'kategori_id');
    }

    // method menampilkan image(foto)
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/berita/' . $this->foto))) {
            return asset('images/berita/' . $this->foto);
        }
    }
    // mengahupus image(foto) di storage(penyimpanan) public
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/berita/' . $this->foto))) {
            return unlink(public_path('images/berita/' . $this->foto));
        }
    }
}
