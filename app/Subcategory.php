<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Photo;
class Subcategory extends Model
{
   protected $fillable = ['	subcategory_name','category_id','subcategory_photo'];
   public function category() {
    return $this->belongsTo(Category::class);
   }
   public function photo() {
     return $this->hasMany('App\Photo', 'subcategory_id');
   }
   protected $primaryKey = 'subcategory_id';

}
