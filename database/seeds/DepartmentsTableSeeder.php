<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'Разработчики',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Оператори',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
