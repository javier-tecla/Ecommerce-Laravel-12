<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
      'value',
      'description',
      'option_id'
    ];

    //Relacion uno a muchos inversa
    public function option(){
        return $this->belongsTo(Option::class);
    }

    //Relacion muchos a muchos 
    public function variant(){
        return $this->belongsToMany(Variant::class)
                    ->withTimestamps();
    }
}
