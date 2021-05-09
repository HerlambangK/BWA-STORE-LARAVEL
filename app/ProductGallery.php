<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use \App\Product;

class ProductGallery extends Model
{
    // use SoftDeletes;

    protected $fillable = [
        //must assigmnt, hal hal yang di tambahkan file file yang mo disafe
        'photos','products_id',
    ];

    protected $hidden =[
        // 'deleted_at'
    ];

    public function product()
        {
              return $this->belongsTo(Product::class, 'products_id','id');
        }
}