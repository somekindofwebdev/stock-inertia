<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BirthsController extends Controller
{
    public function index()
    {
        return Inertia::render('Births', [
            'animal' => 'sheep',
        ]);
    }
}
