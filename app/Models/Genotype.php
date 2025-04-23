<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Breed;

class Genotype extends Model
{
    use HasFactory;

    public function breeds()
    {
        return this->hasMany(Breed::class);
    }
}
