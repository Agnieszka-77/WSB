<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create()
    {
        // Tylko dla admina
        $this->authorize('admin');

        return view('lessons.create');
    }

    public function store(Request $request)
    {
        // Logika zapisywania lekcji

        return redirect()->route('some.route');
    }
}
