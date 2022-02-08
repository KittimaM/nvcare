<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pretest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9','10'
    ];
    
    public function connectfirst(){
        return $this->hasOne(useracc::class,'user_name','user_name');
    }
}
