<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
        {{ $quiz->question }}
        <form action="">
            <input type="text" name="answer" placeholder="入力してください" />
            <button>確定</button>
        </form>

        @if ($quiz == $answer)
        {{ $msg }}
        <a href="{{ '/' }}">TOPに戻る</a>
         @endif



</body>

</html>
