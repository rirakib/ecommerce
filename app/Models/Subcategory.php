<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['cat_id','subcat_id','name','short_description','subcat_stutus','image'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}
