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
                'department_id' => 1,
                'email' => 'azizbek',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Admin',
                'department_id' => 1,
                'email' => 'admin',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'User',
                'department_id' => 2,
                'email' => 'user',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]
        ]);
    }
}
