<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tables = [];
        for ($i = 0;$i<10;$i++){
            $tables[$i] = [
                'books_customer_id' => rand(1,10),
                'name' => Str::random(10).'BooksName',
                'author' => Str::random(10).'Author',
            ];
        }
        DB::table('books')->insert($tables);
    }
}
