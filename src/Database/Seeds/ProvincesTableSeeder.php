<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::insert([
            [
                'name' => 'تهران',
                'en_name' => 'Tehran',
                'area_code' => (int) '021',
                'latitude' => '35.696733',
                'longitude' => '51.2097335'
            ],
        ]);
    }
}
