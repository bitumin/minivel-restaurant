<?php

use Illuminate\Database\Seeder;

class CategoriesAndItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, mt_rand(3,6))
            ->create()
            ->each(function($category) {
                $category->items()->saveMany(factory(App\Item::class, mt_rand(10,25))->make());
            });
    }
}
