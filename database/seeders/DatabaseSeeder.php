<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() { Pemilik::create([ 'name' => 'Pemilik 1', 'email' => 'pemilik1@example.com', 'password' => bcrypt('password'), ]); Pemilik::create([ 'name' => 'Pemilik 2', 'email' => 'pemilik2@example.com', 'password' => bcrypt('password'), ]);
    }
}
