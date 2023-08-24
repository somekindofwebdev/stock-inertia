<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AnimalsController extends Controller
{
    public function index()
    {
        return Inertia::render('Animals', [
            'animal' => 'sheep',
        ]);
    }
}
