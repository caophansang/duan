<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    const SHOW_STATUS = 1;
    const PENDING_STATUS = 2;
    const CANCEL_STATUS = 3;

    const PRODUCT_TYPE = 1;
    const SERVICE_TYPE = 2;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'quantity_type_id',
        'name',
        'price',
        'description',
        'available',
        'type',
        'status',
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function productImage()
    {
        return $this->hasMany('App\Models\ProductImage');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function tag()
    {
    	return $this->belongsToMany('App\Models\Tag', 'product_tags');
    }

    public function like()
    {
    	return $this->belongsToMany('App\Models\User', 'product_likes');
    }

    public function rating()
    {
    	return $this->belongsToMany('App\Models\User', 'product_rating');
    }

    public function quantityType()
    {
        return $this->belongsTo('App\Models\QuantityType', 'quantity_type_id');
    }

}
