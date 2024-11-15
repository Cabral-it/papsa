<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $mail->object }}</h1>
        <hr>
        <div>{{ $mail->content }}</div>
    </div>
</body>
</html>
