<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','cat_id',
    'subcat_id','color_id','brand_id','unit_id','size_id','name','short_description',
    'description','price','product_quantity','product_stutus','product_code','product_offer_price',
    'offer_start_date','offer_end_date','image','multiple_image'
    ];
    
    public function category(){
        $this->belongsTo(Category::class,'cat_id');
    }
    public function subcategory(){
        $this->belongsTo(Subcategory::class,'subcat_id');
    }
    public function color()
    {
        $this->belongsTo(Color::class,'color_id');
    }
    public function size(){
        $this->belongsTo(Size::class,'size_id');
    }
    public function brand()
    {
        $this->belongsTo(Brand::class,'brand_id');
    }
    public function unit()
    {
        $this->belongsTo(Unit::class,'unit_id');
    }
}
