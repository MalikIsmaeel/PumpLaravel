<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $fillable=[
        'city_name',
        'city_nameAr',
        'vat_rate',
         'active',
        'user_id'

    ];
    public function user()
    {
        
        return $this->belongsTo(User::class);
    }
    public function countery()
    {
        
        return $this->belongsTo(countery::class);
    }
}
