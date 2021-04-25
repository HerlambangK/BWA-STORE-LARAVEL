<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        //must assigmnt, hal hal yang di tambahkan file file yang mo disafe
        'name', 'photo', 'slug'
    ];

    protected $hidden =[
        
    ];
}