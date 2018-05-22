<?php

namespace Adlino\IranGeo\Database\Seeds;

use Adlino\IranGeo\Models\County;
use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        County::insert([
            [
                'province_id' => 8,
                'name' => 'اسلامشهر',
                'en_name' => 'Eslamshahr',
                'latitude' => '35.5828025',
                'longitude' => '51.1918665',
            ],
            [
                'province_id' => 8,
                'name' => 'بهارستان',
                'en_name' => 'Baharestan',
                'latitude' => '35.52198',
                'longitude' => '51.0818745',
            ],
            [
                'province_id' => 8,
                'name' => 'پاکدشت',
                'en_name' => 'Pakdasht',
                'latitude' => '35.4452602',
                'longitude' => '51.6195968',
            ],
            [
                'province_id' => 8,
                'name' => 'پردیس',
                'en_name' => 'Pardis',
                'latitude' => '35.7576389',
                'longitude' => '51.7701559',
            ],
            [
                'province_id' => 8,
                'name' => 'پیشوا',
                'en_name' => 'Pishva',
                'latitude' => '35.3072756',
                'longitude' => '51.7129897',
            ],
            [
                'province_id' => 8,
                'name' => 'تهران',
                'en_name' => 'Tehran',
                'latitude' => '35.6970118',
                'longitude' => '51.2097336',
            ],
            [
                'province_id' => 8,
                'name' => 'دماوند',
                'en_name' => 'Damavand',
                'latitude' => '35.7087312',
                'longitude' => '52.0100624',
            ],
            [
                'province_id' => 8,
                'name' => 'رباط‌کریم',
                'en_name' => 'Robat Karim',
                'latitude' => '35.4753043',
                'longitude' => '51.0473293',
            ],
            [
                'province_id' => 8,
                'name' => 'ری',
                'en_name' => 'Rey',
                'latitude' => '35.57262',
                'longitude' => '51.4408747',
            ],
            [
                'province_id' => 8,
                'name' => 'شمیرانات',
                'en_name' => 'Shemiranat',
                'latitude' => '35.9312422',
                'longitude' => '51.45978',
            ],
            [
                'province_id' => 8,
                'name' => 'شهریار',
                'en_name' => 'Shahriar',
                'latitude' => '35.659251',
                'longitude' => '51.0068091',
            ],
            [
                'province_id' => 8,
                'name' => 'فیروزکوه',
                'en_name' => 'Firuzkuh',
                'latitude' => '35.7570629',
                'longitude' => '52.7556218',
            ],
            [
                'province_id' => 8,
                'name' => 'قدس',
                'en_name' => 'Qods',
                'latitude' => '35.7107571',
                'longitude' => '51.0791081',
            ],
            [
                'province_id' => 8,
                'name' => 'قرچک',
                'en_name' => 'Qarchak',
                'latitude' => '35.437087',
                'longitude' => '51.5580653',
            ],
            [
                'province_id' => 8,
                'name' => 'ملارد',
                'en_name' => 'Malard',
                'latitude' => '35.6794783',
                'longitude' => '50.9456843',
            ],
            [
                'province_id' => 8,
                'name' => 'ورامین',
                'en_name' => 'Varamin',
                'latitude' => '35.3449427',
                'longitude' => '51.6078465',
            ],
        ]);
    }
}
