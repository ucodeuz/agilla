<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'name_uz' => 'Toshkent viloyati',
                'name_ru' => 'Ташкентская область',
                'slug' => 'tashkent',
                'type' => 1,
            ],
            [
                'name_uz' => 'Andijon viloyati',
                'name_ru' => 'Андижанская область',
                'slug' => 'andijan',
                'type' => 1
            ],
            [
                'name_uz' => 'Buxoro viloyati',
                'name_ru' => 'Бухарская область',
                'slug' => 'buhara',
                'type' => 1
            ],
            [
                'name_uz' => 'Guliston viloyati',
                'name_ru' => 'Гулистанская область',
                'slug' => 'gulistan',
                'type' => 1
            ],
            [
                'name_uz' => 'Jizzax viloyati',
                'name_ru' => 'Джизакская область',
                'slug' => 'jizzah',
                'type' => 1
            ],
            [
                'name_uz' => 'Navoiy viloyati',
                'name_ru' => 'Навоийская область',
                'slug' => 'navoiy',
                'type' => 1
            ],
            [
                'name_uz' => 'Namangan viloyati',
                'name_ru' => 'Наманганская область',
                'slug' => 'namangan',
                'type' => 1
            ],
            [
                'name_uz' => 'Nukus viloyati',
                'name_ru' => 'Нукусская область',
                'slug' => 'nukus',
                'type' => 1
            ],
            [
                'name_uz' => 'Samarqand viloyati',
                'name_ru' => 'Самаркандская область',
                'slug' => 'samarkand',
                'type' => 1
            ],
            [
                'name_uz' => 'Surxondaryo viloyati',
                'name_ru' => 'Сурхандарьинская область',
                'slug' => 'surhandarya',
                'type' => 1
            ],
            [
                'name_uz' => 'Farg`ona viloyati',
                'name_ru' => 'Ферганская область',
                'slug' => 'fergana',
                'type' => 1
            ],
            [
                'name_uz' => 'Xorazm viloyati',
                'name_ru' => 'Хорезмская область',
                'slug' => 'xarezm',
                'type' => 1
            ],
            [
                'name_uz' => 'Qashqadaryo viloyati',
                'name_ru' => 'Кашкадарьинская область',
                'slug' => 'qarshi',
                'type' => 1
            ]
        ]);
    }
}
