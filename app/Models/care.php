<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class care extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_name',
        '11',
        '12',
        '13',
        '14',
        '15',
        '16',
        '17',
        '18',
        '19','20','21','22','23','24','25','26','27'
        ,'28','29','30','31','32','33','34','35'
    ];

    public function connectsecond(){
        return $this->hasOne(useracc::class,'user_name','user_name');
    }
}
