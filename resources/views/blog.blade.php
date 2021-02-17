<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
  <h1>BLOG</h1>
  @foreach ($posts as $value)
  <div class="container">
    <div class="box">
      <span></span>
      <div class="content">
        <h2> {{ $value->title }}</h2>
        <p> {{ $value->body }} </p>
      </div>
    </div>
  </div>
  @endforeach
</body>

</html>