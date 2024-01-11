<?php

namespace Models\User;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Models\User\User\UserAttributesTrait;
use Models\User\User\UserQueriesTrait;
use Models\User\User\UserRelationsTrait;
use Models\User\User\UserScopesTrait;

/**
 * @property int $id
 * @property string $phone
 * @property string $email
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?string $middle_name
 * @property string $password
 * @property string $api_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use UserRelationsTrait, UserScopesTrait, UserAttributesTrait, UserQueriesTrait;

    protected $table = 'users__users';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function(User $user){
            $user->api_token = Str::uuid();
        });
    }
}
