<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
            'firstname',
            'lastname',
            'gender',
            'email',
            'address',
            'post',
            'build',
            'content',
            'start_date',
            'end_date',
        ];


  
}