<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
                [
                    'name' => 'Hartono Widodo',
                    'email' => 'adminkelurahanbadean@gmai.com',
                    'role' => 'admin',
                    'password' => bcrypt('admin123')

                ],
                [
                    'name' => 'Gibran Santoso',
                    'email' => 'santosogib@gmail.com',
                    'role' => 'RW',
                    'password' => bcrypt('gibransans')

                ],
                [
                    'name' => 'Bambang Muhaimin',
                    'email' => 'bambangimin@gmail.com',
                    'role' => 'user',
                    'password' => bcrypt('iminimin')

                ],
            ];
        foreach($userData as $key => $val)
        {
            User::create($val);
        }
        
    }
}
