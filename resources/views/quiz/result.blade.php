<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  @if ( $correctAnswer != $inputAnswer)
  <h2>GAME OVER</h2>
  <p>あなたが入力した答え：{{$inputAnswer}}</p>
  <p>クイズの解答：{{$correctAnswer}}</p>
  <a href="{{ '/' }}">TOPに戻る</a>
   @else
   <h2>GOODJOB!!</h2>
   <p>あなたが入力した答え：{{$inputAnswer}}</p>
  <p>クイズの解答：{{$correctAnswer}}</p>
  <a href="{{ '/quiz' }}">クイズを続ける</a>
  <a href="{{ '/' }}">TOPに戻る</a>
  @endif
</body>
</html>