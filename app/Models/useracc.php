<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useracc extends Model
{
    use HasFactory ;

    protected $fillable = [
        'user_name',
        'name_user',
        'uni',
        'year',
        'stdid',
        'gender',
        'email',
        'password',
        'birth_date'
    ];
    public function joy(){
        return $this->hasOne(total::class,'user_name','user_name');
    }

    public function connectfirst(){
        return $this->hasOne(pretest::class,'user_name','user_name');
    }
    public function connectsecond(){
        return $this->hasOne(care::class,'user_name','user_name');
    }

}
