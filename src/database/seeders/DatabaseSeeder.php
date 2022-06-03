<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Book;
use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Library::factory(50)
            ->has(
                Book::factory()->count(3)
            )
            ->has(
                Address::factory()
            )
            ->create();
    }
}
