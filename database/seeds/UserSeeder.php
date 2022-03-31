<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $resepsionis = User::create([
            'name' => 'Resepsionis Role',
            'email' => 'resepsionis@role.test',
            'password' => bcrypt('resepsionis')
        ]);
        $resepsionis->assignRole('resepsionis');
    }
}
