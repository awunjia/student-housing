<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Helsinki', 'country_code' => 'FI', 'region' => 'Uusimaa', 'zip_code' => '00100', 'description' => 'Capital of Finland'],
            ['name' => 'Espoo', 'country_code' => 'FI', 'region' => 'Uusimaa', 'zip_code' => '02100', 'description' => 'Second largest city in Finland'],
            ['name' => 'Tampere', 'country_code' => 'FI', 'region' => 'Pirkanmaa', 'zip_code' => '33100', 'description' => 'Known for its industry and lakes'],
            ['name' => 'Vantaa', 'country_code' => 'FI', 'region' => 'Uusimaa', 'zip_code' => '01510', 'description' => 'Home of Helsinki Airport'],
            ['name' => 'Oulu', 'country_code' => 'FI', 'region' => 'North Ostrobothnia', 'zip_code' => '90100', 'description' => 'Technology hub of Northern Finland'],
            ['name' => 'Turku', 'country_code' => 'FI', 'region' => 'Southwest Finland', 'zip_code' => '20100', 'description' => 'Oldest city in Finland'],
            ['name' => 'Jyväskylä', 'country_code' => 'FI', 'region' => 'Central Finland', 'zip_code' => '40100', 'description' => 'Known for education and sports'],
            ['name' => 'Lahti', 'country_code' => 'FI', 'region' => 'Päijänne Tavastia', 'zip_code' => '15100', 'description' => 'Famous for winter sports'],
            ['name' => 'Kuopio', 'country_code' => 'FI', 'region' => 'Northern Savonia', 'zip_code' => '70100', 'description' => 'Known for its lakes and culture'],
            ['name' => 'Vaasa', 'country_code' => 'FI', 'region' => 'Ostrobothnia', 'zip_code' => '65100', 'description' => 'Coastal city with strong maritime history'],
        ];

        foreach ($cities as $city) {
            DB::table('locations')->insert([
                'name' => $city['name'],
                'slug' => Str::slug($city['name']),
                'country_code' => $city['country_code'],
                'region' => $city['region'],
                'zip_code' => $city['zip_code'],
                'description' => $city['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
