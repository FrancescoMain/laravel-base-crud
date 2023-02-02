<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Santo;
class SantoSeeder extends Seeder
{

    public function run()
    {
        Santo::factory() -> count(100) -> create();
    }
}
