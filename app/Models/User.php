<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'permission',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   /* public static function find($userId)
    {
    }*/
    //private mixed $permission;/*narazie jeszcze nie widzę tego uprawnienia */
    /**
     * Sprawdza, czy użytkownik posiada dane uprawnienie.
     *
     * @param string $requiredPermission
     * @return bool
     */
    public function hasPermission(string $requiredPermission): bool
    {
        return $this->permission === $requiredPermission;
    }
}
