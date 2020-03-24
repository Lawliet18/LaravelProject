<?php

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
        $this->call(BooksSeeder::class);
        $this->call(BooksCustomerSeeder::class);
        $this->call(BooksReferenceGenresSeeder::class);
        $this->call(ReferenceWithGenreSeeder::class);
    }
}
