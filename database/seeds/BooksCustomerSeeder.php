<?php

use Illuminate\Database\Seeder;

class BooksCustomerSeeder extends Seeder
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
                'name' => Str::random(10).'CustomerName',
                'password' => Hash::make('password'),
            ];
        }
        DB::table('books_customers')->insert($tables);
    }
}
