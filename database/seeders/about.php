<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class about extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table abouts
        DB::table('abouts')->insert([
        	'judul' => 'TROPISIANIMAL',
            'subjudul' => 'Berbagai pembahasan mengenai fauna atau hewan yang hidup di hutan hujan tropis yang ada di Dunia.',
            'deskripsi' => 'Hewan-hewan tropis tentunya ada di berbagai belahan Dunia. Hewan atau serangga yang hidup dalam ekosistem hutan hujan tropis memiliki banyak macam dan ciri khasnya masing-masing. Website Tropisanimal akan menyajikan berbagai informasi mengenai hewan tropis.',
            'foto1' => 'assets_user/images/bunglon.png',
            'foto2' => 'assets_user/images/monyet.png',
            'foto3' => 'assets_user/images/buaya.png',
        	'visi' => 'Membuat seluruh masyarakat lebih mengenal hewan-hewan tropis dan membantu untuk membudidayakan hewan-hewan tersebut agar tidak punah.',
        	'misi' => 'Memberikan Edukasi dan Sosialisasi, Melindungi dan meregenerasi habitat, Memelihara kelestarian alam, Mengelola sumber daya modal dengan tepat guna dan Membuat Larangan berburu liar'
        ]);

    }
}
