<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CREATE | QUIZ</title>
</head>
<body>
  <h2>QUIZを作成しよう</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{route('store')}}" method="post">
    @csrf
    <input type="text" name="question" placeholder="質問を入力" />
    <input type="text" name="answer" placeholder="答えを入力" />
    <button>送信</button>
  </form>
</body>
</html>