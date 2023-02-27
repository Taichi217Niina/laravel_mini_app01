<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->insert(
            [
                'question' => 'スネ夫の苗字は何？',
                'answer' => '骨川'
            ]
        );

        DB::table('quizzes')->insert(
            [
                'question' => 'ドラえもんの嫌いな動物は？',
                'answer' => 'ネズミ'
            ]
        );
    }
}
