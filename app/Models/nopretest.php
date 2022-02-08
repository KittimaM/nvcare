<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nopretest extends Model
{
    use HasFactory;
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
}
