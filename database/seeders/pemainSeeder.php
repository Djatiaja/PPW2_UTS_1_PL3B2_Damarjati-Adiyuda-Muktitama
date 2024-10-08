<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i=0; $i < 10; $i++) {
            pemain::create([
                "nama_pemain" => fake()->name(),
                "nomor_pemain" => fake()->randomNumber(),
                "posisi" => fake()->randomNumber()
            ]);
        }
    }
}
