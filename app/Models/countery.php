<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countery extends Model
{
    use HasFactory;
    protected $fillable=[
        'countery_name',
        'countery_nameAr',
        'vat_rate',
         'active',
         'countery_id',
        'user_id'

    ];
    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
    public function city(){
        return $this->hasMany(city::class); 
    }
}
