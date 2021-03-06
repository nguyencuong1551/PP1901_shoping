<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<25; $i++){
            DB::table('images')->insert([
                'name' => 'https://salt.tikicdn.com/cache/75x75/ts/product/b1/e4/61/1e6c2f5b6fc78fe62c79f369eb392265.jpg',
                'id_product' => rand(1, 25),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
