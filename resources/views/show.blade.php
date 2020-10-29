<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$book->title}}</title>
</head>
<body>
    <ul>
    <li>{{$book->title}}</li>
    <li>{{$book->author}}</li>
    <li>{{$book->pages}}</li>
    <li>{{$book->edition}}</li>
    <li>{{$book->year}}</li>
    <li>{{$book->isbn}}</li>
    <li>{{$book->genre}}</li>
    <li><img src="{{$book->image}}" alt="{{$book->title}}"></li>
    </ul>
    
</body>
</html>