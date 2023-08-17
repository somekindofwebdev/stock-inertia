<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DeathsController extends Controller
{
    public function index()
    {
        return Inertia::render('Deaths', [
            'animal' => 'sheep',
        ]);
    }
}
