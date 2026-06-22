<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use Inertia\Inertia;

class GigController extends Controller
{
    public function index()
    {
        $gigs = Gig::with('user')->where('status', 'active')->get();

        return Inertia::render('Gigs/Index', [
            'gigs' => $gigs
        ]);
    }
}
