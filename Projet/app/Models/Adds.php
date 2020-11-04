<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model 
{
    use HasFactory;
    protected $fillable = [
       'title',
       'conpagny_name',
       'description',
       'location',
       'experience',
       'email',
    ];
}
