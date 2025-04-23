<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genotype;

class Breed extends Model
{
    use HasFactory;

    public function genotype(): BelongsTo
        {
            return $this->belongsTo(Genotype::class);
        }
}
