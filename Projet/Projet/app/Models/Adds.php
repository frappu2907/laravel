<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model 
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    use HasFactory;
    protected $fillable = [
       'title',
       'compagny_name',
       'description',
       'location',
       'experience',
       'email',
    ];
}
