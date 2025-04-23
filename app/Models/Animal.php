<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genotype;
use App\Models\Tag;

class Animal extends Model
{
    use HasFactory;

    public function genotypes()
    {
        return this->hasOne(Genotype::class);
    }

    public function tags()
    {
        return this->hasOne(Tag::class);
    }
}
