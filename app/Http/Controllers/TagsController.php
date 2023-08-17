<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TagsController extends Controller
{
    public function index()
    {
        return Inertia::render('Tags', [
            'animal' => 'sheep',
        ]);
    }
}
