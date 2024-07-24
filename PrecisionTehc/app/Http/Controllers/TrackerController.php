<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index()
    {
        $trackers = Tracker::all();
        return view('products', compact('trackers'));
    }

    public function show($id)
    {
        $tracker = Tracker::findOrFail($id);
        return view('product', compact('tracker'));
    }
}
