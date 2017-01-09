<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::truncateTable('users');

        $users = [
            [
                'id'       => 1,
                'name'     => 'uenoryo1',
                'email'    => 'ueno1@ueno.com',
                'password' => 'uenoryo1',
            ],
            [
                'id'       => 2,
                'name'     => 'uenoryo2',
                'email'    => 'ueno2@ueno.com',
                'password' => 'uenoryo2',
            ],
            [
                'id'       => 3,
                'name'     => 'uenoryo3',
                'email'    => 'ueno3@ueno.com',
                'password' => 'uenoryo3',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
