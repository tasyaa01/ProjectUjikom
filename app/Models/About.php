<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public $fillable = ['judul', 'subjudul','deskripsi','foto1','foto2','foto3','visi','misi'];
    
        // method menampilkan image(foto)
        public function image()
        {
            if ($this->foto1 && file_exists(public_path('images/about/' . $this->foto1))) {
                return asset('images/about/' . $this->foto1);
            }
        }
        // mengahupus image(foto) di storage(penyimpanan) public
        public function deleteImage()
        {
            if ($this->foto1 && file_exists(public_path('images/about/' . $this->foto1))) {
                return unlink(public_path('images/about/' . $this->foto1));
            }
        }

    public function create($table, $data)
    {
    	DB::table($table)->insert([
    		$data
    	]);
    }
}
