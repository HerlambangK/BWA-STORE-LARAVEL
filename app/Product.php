<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Product extends Model
{
     use SoftDeletes;

    protected $fillable = [
        //must assigmnt, hal hal yang di tambahkan file file yang mo disafe
        'name', 'user_id', 'categories_id','price', 'description', 'slug'
    ];

    protected $hidden =[
        
    ];

    public function galleries()
        {
              return $this->hasMany(ProductGallery::class, 'products_id','id');
        }

    public function user()
        {
              return $this->hasOne(User::class, 'id','user_id');
        }
        
    public function category()
        {
              return $this->belongsTo(Category::class, 'categories_id','id');
        }
}