<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $tests = [];
        $tName = 'ivan';
        for($i = 0;$i<2;$i++){
        $tests[$i] = [
            'title' => $tName . $i,
            'slug' => Str::slug($tName . $i*10),
            'description'=> $tName . 'desc',
            'another_id'=>$i
        ];
    }
        DB::table('tests')->insert($tests);
    }
}
