<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
            'name'=> 'Samsung TV',
            'price'=>'50000',
            'description'=>'smart phone with large 32 inches large LCD',
            'category'=>'TV',
            'gallery'=>'https://pakistanistores.com/public/data/images/a92045101c27493783314289d20bd862.jpg',
        ],
        [
            'name'=> 'Oppo Mobile',
            'price'=>'20000',
            'description'=>'smart phone with 8 gb ram and much more fatures',
            'category'=>'mobile',
            'gallery'=>'https://www.whatmobile.com.pk/admin/images/Oppo/OppoReno8-b.jpg',
        ],
        [
            'name'=> 'TCL android TV',
            'price'=>'100000',
            'description'=>'TCL android tv with 64 inches screen',
            'category'=>'TV',
            'gallery'=>'https://pakistanistores.com/public/data/images/a92045101c27493783314289d20bd862.jpg',
        ]
    
        ]);
        
    }
}
