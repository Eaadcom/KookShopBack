<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Account extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use HasFactory;

    protected $fillable = [
        'email',
    ];

    protected $hidden = [
        'password',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function ownedProducts(){
        return $this->belongsToMany(AccountProduct::class);
    }

    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }


    // UNIMPLEMENTED CODE BELOW


    public function getAuthIdentifier()
    {
        error_log(2);
        // TODO: Implement getAuthIdentifier() method.
    }

    public function getRememberToken()
    {
        error_log(3);
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken($value)
    {
        error_log(4);
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName()
    {
        error_log(5);
        // TODO: Implement getRememberTokenName() method.
    }

    public function can($abilities, $arguments = [])
    {
        error_log(6);
        // TODO: Implement can() method.
    }
}
