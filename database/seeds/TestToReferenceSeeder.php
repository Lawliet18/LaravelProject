<?php

use Illuminate\Database\Seeder;

class TestToReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testToReference = [];
        $tName = 'ivan';
        for($i = 0;$i<2;$i++){
            $testToReference[$i] = [
                'title' => $tName . $i,
                'slug' => Str::slug($tName . $i*10),
                'description'=> $tName . 'desc',
                'another_id'=>$i,
                'test_id'=>$i + 1
            ];
        }
        DB::table('test_to_references')->insert($testToReference);
    }
}
