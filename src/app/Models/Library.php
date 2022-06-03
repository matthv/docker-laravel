<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Library extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'libraryId');
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'libraryId');
    }
}
