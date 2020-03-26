<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function insert(){
        DB::table('books')->insert([

        ]);
    }
}
