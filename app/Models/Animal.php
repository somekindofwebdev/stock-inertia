<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

use App\Models\Breed;
use App\Models\Tag;

class Animal extends Model
{
    use HasFactory;

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
