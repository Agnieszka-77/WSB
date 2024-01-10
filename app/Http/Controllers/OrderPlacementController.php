<?php

namespace App\Http\Controllers;

#use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderPlacementController extends Controller
{
    public function show(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view(view:'order');
    }
}
