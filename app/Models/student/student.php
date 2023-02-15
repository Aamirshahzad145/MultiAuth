<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;
    protected $table= "student";
    protected $fillable  =   [
        'fullname','fatname',   
        'email','rolnumber',
        'phone','date','address',
        'gender','province',
        'city','skills'
        ,'subject','image'
    ];

    protected function skills(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 

    protected function subject(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
