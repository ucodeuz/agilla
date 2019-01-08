<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory('App\Models\Employee')->create();
        DB::table('employees')->insert([
            [
                'name' => 'Azizbek',
                'employee_type_id' => 1,
                'employee_type' => 'Administrator',
                'email' => 'azizbek',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Admin',
                'employee_type_id' => 1,
                'employee_type' => 'Administrator',
                'email' => 'admin',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'User',
                'employee_type_id' => 2,
                'employee_type' => 'Moderator',
                'email' => 'user',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
