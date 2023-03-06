<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP | QUIZ</title>
</head>

<body>
    <h1>Welcom to Quiz Game</h1>
    <p>聞かれたクイズに対して５問連続で正解するとゲームクリア！</p>
    <p>追加要件：レベルごとに分かれた問題を出題させる</p>

    <a href="{{ '/quiz' }}"><button>ゲームを始める</button></a>
    <form action="{{ route('create') }}" method="get">
        <button>クイズを作成する</button>
    </form>
    <P>クイズ一覧</P>
    @foreach ($quizAll as $quiz)
       {{ $quiz->question }}
        <form action="{{ route('delete', ['id' => $quiz->id]) }}" method="post">
            @method('delete')
            @csrf
            <button>削除する</button>
        </form>
        <a href="{{ route('edit', ['id'=>$quiz->id])}}"><button>編集</button></a><br />
    @endforeach
</body>

</html>
