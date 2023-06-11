<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集完了</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('header')
    <div class="signup-card">
        <h1>編集完了</h1>
        @if ($_SERVER['REQUEST_METHOD'] === 'POST')
        <p>編集が完了しました。</p>
        @else
        <p>何か問題が発生しました。再度お試しください。</p>
        @endif
        <a href="./main.php">トップへ戻る</a>
    </div>
    @include('footer')
</body>

</html>