<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'time','location', 'car_model','price','plate_num', 'professional_id','status'
    ];

    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function professional()
    {
        return $this->belongsTo(User::class, 'professional_id');
    }



    public function users()
    {
        return $this->user()->union($this->professional()->toBase());
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    


    
}

