<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          SubCategory::insert([
            ['category_id'=>1,'name'=>'HP','slug'=>'hp','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>1,'name'=>'Laptop','slug'=>'laptop','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>2,'name'=>'Pria','slug'=>'fashion-pria','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>2,'name'=>'Wanita','slug'=>'fashion-wanita','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>3,'name'=>'Motor','slug'=>'motor','status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
