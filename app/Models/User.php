<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
// implements MustVerifyEmail
{
    use LogsActivity;
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;
    
    // protected static $logAttributes = ['name', 'email', 'password'];
    protected static $recordEvents = ['deleted', 'created','updated'];

    // public function getActivitylogOptions()
    // {
    //     return LogOptions::defaults()
    //     ->useLogName('User');
    // }

    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return " You have {$eventName} user ";
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('User')
        ->setDescriptionForEvent(fn(string $eventName) => "You have {$eventName} User")
        ->logOnly(['name', 'email', 'password'])
        ->dontLogIfAttributesChangedOnly(['password'])
        ->logOnlyDirty();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
