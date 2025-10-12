<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Routing\Controller;

class HomePageController extends Controller
{

public function index()
{
    // Use paginate() instead of take() + get()
    $reviews = \App\Models\Review::latest()->paginate(5);

    return view('home-page', compact('reviews'));
}

}
