<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => "AC",
                "slug" => 'ac',
                "image" => "1521969345.png"
            ],
            [
                "name" => "Beauty",
                "slug" => 'beauty',
                "image" => "1521969358.png"
            ],
            [
                "name" => "Plumbing",
                "slug" => 'plumbing',
                "image" => "1521969409.png"
            ],
            [
                "name" => "Electrical",
                "slug" => 'electrical',
                "image" => "1521969419.png"
            ],
            [
                "name" => "Shower Filter",
                "slug" => 'shower-filter',
                "image" => "1521969454.png"
            ],
            [
                "name" => "Home Cleaning",
                "slug" => 'home-cleaning',
                "image" => "1521969464.png"
            ],
            [
                "name" => "Carpentry",
                "slug" => 'carpentry',
                "image" => "1521969490.png"
            ],
            [
                "name" => "Pest Control",
                "slug" => 'pest-control',
                "image" => "1521969512.png"
            ],
            [
                "name" => "Chimey Hob",
                "slug" => 'chimey-hob',
                "image" => "1521969522.png"
            ],
        ]);
    }
}
