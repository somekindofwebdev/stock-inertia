<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function index()
    {
        return Inertia::render('Animals', [
            'animals' => Animal
                ::with(['breed', 'breed.genotype', 'tag'])
                ->get(),
        ]);
    }
}
