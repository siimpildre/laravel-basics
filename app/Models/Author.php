<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;
<<<<<<< HEAD
    
    protected $guarded = [];
=======

    public $timestamps = false;
>>>>>>> f28ec87437cf7193a3b0ac9022e14d7bd1bf18cb

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, "book_authors");
    }

}
