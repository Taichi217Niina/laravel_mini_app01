<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show()
    {
        return view('quiz.show');
    }

    public function create()
    {
        return view();
    }
}
