<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Reservation;
use App\Models\Salles;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory()->create([
        //     'id' => 1,
        //     'name' => 'Test',
        //     'email' => 'test@gmail.com',
        //     'password' => bcrypt('pass123'),
        //     'role_id' => 1
        // ]);

        Role::factory()->create([
            'id' => 1,
            'rolename' => 'Client'
        ]);
    }
}
