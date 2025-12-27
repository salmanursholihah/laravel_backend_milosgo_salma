<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Category::insert([
            ['name'=>'Elektronik','slug'=>'elektronik','icon'=>'tv','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Fashion','slug'=>'fashion','icon'=>'tshirt','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Otomotif','slug'=>'otomotif','icon'=>'car','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Kesehatan','slug'=>'kesehatan','icon'=>'heart','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Rumah Tangga','slug'=>'rumah-tangga','icon'=>'home','status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
