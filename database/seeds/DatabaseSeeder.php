<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BillsTaleSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(imageEvent::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}

