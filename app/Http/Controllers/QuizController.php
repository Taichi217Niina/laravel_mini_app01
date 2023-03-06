<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use Request as QuizRequest;

class QuizController extends Controller
{
    public function top()
    {
        //全件検索：一覧表示
        $quizAll = Quiz::all();

        return view('quiz.top', compact('quizAll'));
    }

    public function show()
    {
        //ランダムでデータを取得
        $quiz = Quiz::inRandomOrder()->first();

        return view('quiz.show', compact('quiz'));
    }

    public function result()
    {
        if (QuizRequest::has('correctAnswer')) {
            //正しい解答
            $correctAnswer = QuizRequest::input('correctAnswer');
            //入力した解答
            $inputAnswer = QuizRequest::input('inputAnswer');
        }
        return view('quiz.result', compact('inputAnswer', 'correctAnswer'));
    }

    public function edit(Request $request)
    {
        $quiz = Quiz::find($request['id']);
        return view('quiz.edit', compact('quiz'));
    }

    public function update(Request $request)
    {
        //空白バリデーション
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $quiz = Quiz::find($request['id']);
        $quiz->question = $request['question'];
        $quiz->answer = $request['answer'];
        $quiz->save();

        return redirect()->route('top');
    }

    public function create()
    {
        return view('quiz.create');
    }

    public function store(Request $request)
    {

        //空白バリデーション
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Quiz::create([
            'question' => $request['question'],
            'answer' => $request['answer']
        ]);

        return redirect()->route('top');
    }

    public function delete(Request $request)
    {
        $quiz = Quiz::find($request['id']);
        $quiz->delete();

        return redirect()->route('top');
    }
}
