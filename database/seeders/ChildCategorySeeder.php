<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ChildCategory;


class ChildCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ChildCategory::insert([
            ['category_id'=>1,'sub_category_id'=>1,'name'=>'Android','slug'=>'android','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>1,'sub_category_id'=>1,'name'=>'iPhone','slug'=>'iphone','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>1,'sub_category_id'=>2,'name'=>'Gaming','slug'=>'gaming-laptop','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>2,'sub_category_id'=>3,'name'=>'Kaos','slug'=>'kaos','status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['category_id'=>3,'sub_category_id'=>5,'name'=>'Sport','slug'=>'motor-sport','status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
