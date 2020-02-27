<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} | Jukebox</title>
  <link rel="stylesheet" href={{asset("css/app.css")}}>
</head>
<body>
  <h1>@yield('headline')</h1>
  @yield('content')
</body>
</html>