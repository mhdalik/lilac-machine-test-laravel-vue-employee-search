<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Designation::insert([
            ['name' => 'Marketing Manager'],
            ['name' => 'Mobile Application Dev'],
            ['name' => 'Content Writer'],
            ['name' => 'Project Manager'],
        ]);
    }
}
