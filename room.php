<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{ 

    use HasFactory;
  
    protected $fillable = ['category_name', 'number_of_beds','price','has_balcony', 'has_sea_view' , 'status' , 'room_img' ,'room_description'];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
