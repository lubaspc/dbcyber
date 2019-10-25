<?php

use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Global',
            'email' => 'admin@lubins.com',
            'password' => Hash::make('prueba')
        ]);
    }
}
