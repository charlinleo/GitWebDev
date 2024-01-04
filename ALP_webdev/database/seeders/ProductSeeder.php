<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $index = 0;

        foreach (Category::all() as $category) {
            if ($index == 0) {
                DB::table('products')->insert([
                    'product_image' => 'blowoff.jpg',
                    'product_name' => "Blow Off Valve Universal",
                    'category_id' => $category->id, //blow off
                    'product_price' => "Rp 4.500.000",
                    'product_desc' => "Blow Off Valve membantu mengawetkan Turbo karena Blow off Valve
                    membuang udara terkompresi (boost) ke atmosfer pada saat pedal gas diangkat/ditutup.",
                ]);



            } else if ($index == 1) {
                DB::table('products')->insert([
                    'product_image' => 'ledt15.jpg',
                    'product_name' => "LED T15",
                    'category_id' => $category->id, //mundur
                    'product_price' => "Rp 30.000",
                    'product_desc' => "LED T15 merupakan LED yang banyak digunakan untuk lampu mundur.
                    Tipe T15 memiliki tipe input pipih.",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'ledbau15s.jpg',
                    'product_name' => "LED BAU15S Mundur",
                    'category_id' => $category->id, //mundur
                    'product_price' => "Rp 20.000",
                    'product_desc' => "LED BAU15S merupakan LED yang banyak digunakan untuk lampu mundur.
                     Tipe BAU15S memiliki tipe input bulat.",
                ]);



            } else if ($index == 2) {
                DB::table('products')->insert([
                    'product_image' => 'ledt20.jpg',
                    'product_name' => "V1 LED T20",
                    'category_id' => $category->id, //sein
                    'product_price' => "Rp 25.000",
                    'product_desc' => "Pada dasarnya, LED T20 akan berfungsi untuk mengalirkan
                    listrik ke bagian lampu dan nantinya sein akan berkedip, sebagai tanda akan berbelok.",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'ledt20.jpg',
                    'product_name' => "V3 LED T20",
                    'category_id' => $category->id, //sein
                    'product_price' => "Rp 25.000",
                    'product_desc' => "Versi lebih baru dari V1 LED T20.",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'ledbau15s.jpg',
                    'product_name' => "V1 LED BAU15S Sein",
                    'category_id' => $category->id, //sein
                    'product_price' => "Rp 35.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'ledbau15s.jpg',
                    'product_name' => "V3 LED BAU15S Sein",
                    'category_id' => $category->id, //sein
                    'product_price' => "Rp 35.000",
                    'product_desc' => "-",
                ]);


            } else if ($index == 3) {
                DB::table('products')->insert([
                    'product_image' => 'h11.jpg',
                    'product_name' => "Foglamp Single Color 5000K H11",
                    'category_id' => $category->id, //foglamp
                    'product_price' => "Rp 150.000",
                    'product_desc' => "Fog lamp satu warna dengan cahaya putih dingin (5000K).",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Foglamp 3 Color (lq) H11",
                    'category_id' => $category->id, //foglamp
                    'product_price' => "Rp 150.000",
                    'product_desc' => "Fog lamp tiga warna (white, yellow, warm white).",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'foglamphq.jpg',
                    'product_name' => "Foglamp 3 Color (hq) H11",
                    'category_id' => $category->id, //foglamp
                    'product_price' => "Rp 300.000",
                    'product_desc' => "Fog lamp tiga warna (white, yellow, warm white).",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Foglamp 3 Color H16",
                    'category_id' => $category->id, //foglamp
                    'product_price' => "Rp 150.000",
                    'product_desc' => "Fog lamp tiga warna (white, yellow, warm white).",
                ]);



            } else if ($index == 4) {
                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Low Quality",
                    'category_id' => $category->id, //toa
                    'product_price' => "Rp 150.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "High Quality",
                    'category_id' => $category->id, //toa
                    'product_price' => "Rp 750.000",
                    'product_desc' => "-",
                ]);


            } else if ($index == 5) {
                DB::table('products')->insert([
                    'product_image' => 'downpipebrio.jpg',
                    'product_name' => "Down Pipe Honda Brio",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 650.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'downpipe2kd.jpg',
                    'product_name' => "Down Pipe Toyota Innova",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.000.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'downpipereborn.jpg',
                    'product_name' => "Down Pipe Toyota Innova Reborn",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.000.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Muffler Honda Brio",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 450.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'muffler2kd.jpeg',
                    'product_name' => "Muffler Toyota Innova",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.200.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Muffler Toyota Innova Reborn",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.200.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'frontpipebrio.jpg',
                    'product_name' => "Front Pipe Honda Brio",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 600.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'frontpipe2kd.jpg',
                    'product_name' => "Front Pipe Toyota Innova",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.100.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'noimage.jpg',
                    'product_name' => "Front Pipe Toyota Innova Reborn",
                    'category_id' => $category->id, //knalpot
                    'product_price' => "Rp 1.200.000",
                    'product_desc' => "-",
                ]);



            } else if ($index == 6) {
                DB::table('products')->insert([
                    'product_image' => 't10.jpg',
                    'product_name' => "T10",
                    'category_id' => $category->id, //kabin
                    'product_price' => "Rp 20.000",
                    'product_desc' => "-",
                ]);

                DB::table('products')->insert([
                    'product_image' => 'cobplasma.jpg',
                    'product_name' => "COB Plasma",
                    'category_id' => $category->id, //kabin
                    'product_price' => "Rp 20.000",
                    'product_desc' => "-",
                ]);
            }
            $index++;
        }
    }
}
