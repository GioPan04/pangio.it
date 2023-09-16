<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $u = new \App\Models\User;
        $u->name = 'Gioele Pannetto';
        $u->username = 'GioPan';
        $u->password = Hash::make('password');
        $u->save();
    }
}
