<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>編集画面</title>
</head>
<body>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <form action={{route('update', ['id'=>$quiz->id])}} method="post">
    @csrf
    <input type="text" name="question" value="{{$quiz->question}}">
    <input type="text" name="answer" value="{{$quiz->answer}}">
    <input type="submit" value="編集確定">
  </form>
</body>
</html>