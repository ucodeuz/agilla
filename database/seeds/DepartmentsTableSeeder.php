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
        DB::table('employee_types')->insert([
            [
                'name' => 'Администратор',
                'guard_name' => 'Administrator',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Модератор',
                'guard_name' => 'Moderator',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
