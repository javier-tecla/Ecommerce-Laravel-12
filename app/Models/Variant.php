<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
      'sku',
      'image_path',
      'product_id'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image_path ? Storage::url($this->image_path) : asset('img/Image-not-found.png'),
        );
    }

    // //Relacion uno a muchos inversa
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Relacion muchos a muchos
    public function features(){
        return $this->belongsToMany(Feature::class)
                    ->withTimestamps();
    }
}
