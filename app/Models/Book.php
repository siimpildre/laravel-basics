<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Casts\Attribute;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public $timestamps = false;
    public function author(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn(float $value) => round($value, 2)
        );
    }
}
