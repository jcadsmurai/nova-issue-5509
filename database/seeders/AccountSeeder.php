<?php

namespace Database\Seeders;

use Database\Factories\AccountFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountFactory::new()->times(50)->create();
    }
}
