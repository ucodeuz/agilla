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
                'postion' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Avtomabil va ehtiyot qismlar',
                'name_ru' => 'Запчасти и автотовары',
                'postion' => 2,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Ko`chmas mulk',
                'name_ru' => 'Недвижимость',
                'postion' => 3,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Xizmatlar',
                'name_ru' => 'Услуги',
                'postion' => 4,
                'created_at' => new DateTime,
                'updated_at' => new DateTime

            ],
            [
                'name_uz' => 'Kiyimlar, elektronika va boshqalar',
                'name_ru' => 'Вещи, электроника и прочее',
                'postion' => 5,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Bo`sh ish o`rinlar',
                'name_ru' => 'Вакансии',
                'postion' => 6,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Hayvonlar',
                'name_ru' => 'Животные',
                'postion' => 7,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name_uz' => 'Bizneslar',
                'name_ru' => 'Для бизнеса',
                'postion' => 8,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
