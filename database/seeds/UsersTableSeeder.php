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
        DB::table('users')->insert([
            [
                'name'          => 'Administrador',
                'tipo_conta'    => 'admin',
                'email'         => 'administrador@email.com',
                'password'      => bcrypt('secret'),
                'verified'      => 1
            ]
        ]);

    }
}
