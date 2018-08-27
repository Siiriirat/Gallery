<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
use App\Photo;

class Category extends Model
{
   protected $fillable = ['category_name','category_photo'];
   public function subcategory() {
     return $this->hasMany('App\Subcategory', 'category_id');
   }
   public function photo() {
     return $this->hasMany('App\Photo', 'category_id');
   }
   protected $primaryKey = 'category_id';

}
