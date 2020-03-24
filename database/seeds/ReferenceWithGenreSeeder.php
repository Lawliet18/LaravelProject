<?php

use Illuminate\Database\Seeder;

class ReferenceWithGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = [];
        for ($i = 0;$i<100;$i++){
            $tables[$i] = [
                'books_id' => rand(1,10),
                'books_genre_id' => rand(1,10),
            ];
        }
        DB::table('book_books_genre')->insert($tables);
    }
}
