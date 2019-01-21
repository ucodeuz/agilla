<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name_uz' => 'Maxsus texnika va mototsikllar',
                'name_ru' => 'Спецтехника и мотоциклы',
                'position' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Avtomabil va ehtiyot qismlar',
                'name_ru' => 'Запчасти и автотовары',
                'position' => 2,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Ko`chmas mulk',
                'name_ru' => 'Недвижимость',
                'position' => 3,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Xizmatlar',
                'name_ru' => 'Услуги',
                'position' => 4,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Kiyimlar, elektronika va boshqalar',
                'name_ru' => 'Вещи, электроника и прочее',
                'position' => 5,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Bo`sh ish o`rinlar',
                'name_ru' => 'Вакансии',
                'position' => 6,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Hayvonlar',
                'name_ru' => 'Животные',
                'position' => 7,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Bizneslar',
                'name_ru' => 'Для бизнеса',
                'position' => 8,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
