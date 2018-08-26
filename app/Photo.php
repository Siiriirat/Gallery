<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Subcategory;

class Photo extends Model
{
  protected $fillable = ['photo_name','category_id','subcategory_id','status','photo'];
  public function category() {
   return $this->belongsTo(Category::class);
  }
  public function subcategory() {
   return $this->belongsTo(Subcategory::class);
  }

  protected $primaryKey = 'photo_id';
}
