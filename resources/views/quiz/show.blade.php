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
    <form action="{{ '/quiz/result' }}" method=get>
        <input type="hidden" name="correctAnswer" value="{{ $quiz->answer }}" />
        <input type="text" name="inputAnswer" placeholder="入力してください" />
        <button>確定</button>
    </form>
</body>

</html>
