<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$welcome_message}}</h1>
    <h4>Laravel è compatibile con:</h4>
    <ul>
    @foreach ($compatibility as $element)
                    <li>{{$element}}</li>
                @endforeach
    </ul>
</body>
</html>