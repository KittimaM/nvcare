<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class total extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'total','total2'
    ];

   public function joy(){
       return $this->hasOne(useracc::class,'user_name','user_name');
   }
}
