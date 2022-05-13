<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Himanitro News</title>

  @yield('style_css')
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:ital,wght@0,600;0,700;1,100;1,200;1,300;1,400&family=Raleway:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
  @include('components.news.header')

  @yield('content')

  @include('components.news.footer')
</body>

</html>
