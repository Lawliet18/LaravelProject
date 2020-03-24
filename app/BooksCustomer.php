<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BooksCustomer extends Model
{
    public function book(){
        return $this->hasMany(Books::class);
    }
}
