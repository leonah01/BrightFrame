<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * Table name associated with this model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * User role constants.
     */
    const ROLE_ADMIN = 'admin';
    const ROLE_DEVELOPER = 'developer';
    const ROLE_SALES = 'sales';

    /**
     * Mass assignable attributes.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Ensures roles can be assigned
    ];

    /**
     * Attributes that should be hidden from serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Attribute casting.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Ensures automatic password hashing
    ];

    /**
     * Check if the user is an Admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    /**
     * Check if the user is a Developer.
     *
     * @return bool
     */
    public function isDeveloper(): bool
    {
        return $this->role === self::ROLE_DEVELOPER;
    }

    /**
     * Check if the user is a Sales representative.
     *
     * @return bool
     */
    public function isSales(): bool
    {
        return $this->role === self::ROLE_SALES;
    }

    /**
     * Relationship: A user can have many projects.
     *
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'assigned_to');
    }
}
