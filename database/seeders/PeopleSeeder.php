<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            ['name' => 'John', 'surname' => 'Doe', 'address' => '123 Main St', 'birthday' => '1980-01-01', 'age' => 41, 'salary' => 1000.00, 'rdn' => '123456789', 'status' => '1'],
            ['name' => 'Jane', 'surname' => 'Doe', 'address' => '123 Main St', 'birthday' => '1980-01-01', 'age' => 41, 'salary' => 1000.00, 'rdn' => '123456789', 'status' => '1'],
            ['name' => 'John', 'surname' => 'Smith', 'address' => '123 Main St', 'birthday' => '1980-01-01', 'age' => 41, 'salary' => 1000.00, 'rdn' => '123456789', 'status' => '1'],
            ['name' => 'Jane', 'surname' => 'Smith', 'address' => '123 Main St', 'birthday' => '1980-01-01', 'age' => 41, 'salary' => 1000.00, 'rdn' => '123456789', 'status' => '1'],
            ['name' => 'John', 'surname' => 'Johnson', 'address' => '123 Main St', 'birthday' => '1980-01-01', 'age' => 41, 'salary' => 1000.00, 'rdn' => '123456789', 'status' => '1'],
        ]);
    }
}
