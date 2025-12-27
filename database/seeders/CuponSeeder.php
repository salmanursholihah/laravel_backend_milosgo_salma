<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cupon;


class CuponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           Cupon::insert([
            ['name'=>'Diskon 10%','code'=>'DISC10','quantity'=>100,'max_use'=>1,'start_date'=>now(),'end_date'=>now()->addMonth(),'discount_type'=>'percent','discount'=>10,'total'=>100,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Diskon 20%','code'=>'DISC20','quantity'=>50,'max_use'=>1,'start_date'=>now(),'end_date'=>now()->addMonth(),'discount_type'=>'percent','discount'=>20,'total'=>50,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Potongan 50K','code'=>'CUT50','quantity'=>30,'max_use'=>1,'start_date'=>now(),'end_date'=>now()->addMonth(),'discount_type'=>'fixed','discount'=>50000,'total'=>30,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Potongan 100K','code'=>'CUT100','quantity'=>20,'max_use'=>1,'start_date'=>now(),'end_date'=>now()->addMonth(),'discount_type'=>'fixed','discount'=>100000,'total'=>20,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
            ['name'=>'Promo Akhir Tahun','code'=>'YEAR25','quantity'=>10,'max_use'=>1,'start_date'=>now(),'end_date'=>now()->addMonth(),'discount_type'=>'percent','discount'=>25,'total'=>10,'status'=>1,'created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
