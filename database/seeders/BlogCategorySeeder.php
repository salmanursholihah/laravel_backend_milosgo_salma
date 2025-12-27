<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         BlogCategory::insert([
            ['name'=>'Teknologi','slug'=>'teknologi','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Bisnis','slug'=>'bisnis','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Lifestyle','slug'=>'lifestyle','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Kesehatan','slug'=>'kesehatan-blog','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Otomotif','slug'=>'otomotif-blog','status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
