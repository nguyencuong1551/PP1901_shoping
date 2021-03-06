<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i<25; $i++){
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(300),
                'unit_price' => rand(50, 1000),
                'id_event' => rand(1,4),
                'id_category' => rand(1,10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
