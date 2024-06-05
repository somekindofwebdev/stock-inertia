<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MovementsController extends Controller
{
    public function index()
    {
        return Inertia::render('Movements', [
            'animal' => 'sheep',
        ]);
    }
}
