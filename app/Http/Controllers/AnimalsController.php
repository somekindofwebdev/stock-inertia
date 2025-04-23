<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Animal;

class AnimalsController extends Controller
{
    public function index()
    {
        return Inertia::render('Animals', [
            'animals' => Animal::all(),
        ]);
    }
}
