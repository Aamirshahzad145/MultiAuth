<?php

namespace App\Models\post;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{
    use HasFactory;
    protected $table    =   'post';
    protected $fillable =   [
        'name','detail'
    ];
}
