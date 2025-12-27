<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Slider::insert([
            ['type'=>'home','title'=>'Promo Elektronik','starting_price'=>'1.000.000','btn_url'=>'/shop','serial'=>1,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['type'=>'home','title'=>'Diskon Fashion','starting_price'=>'99.000','btn_url'=>'/fashion','serial'=>2,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['type'=>'home','title'=>'Otomotif Sale','starting_price'=>'5.000.000','btn_url'=>'/otomotif','serial'=>3,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['type'=>'home','title'=>'Promo Kesehatan','starting_price'=>'50.000','btn_url'=>'/health','serial'=>4,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['type'=>'home','title'=>'Promo Rumah','starting_price'=>'150.000','btn_url'=>'/home','serial'=>5,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
