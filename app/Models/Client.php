<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'sales_rep_id', // Reference to User ID (Sales Representative)
    ];

    /**
     * Define relationship: A client can have multiple invoices.
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
