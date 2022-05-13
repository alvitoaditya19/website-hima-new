<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edm.merch | ecommerce website design</title>
	<link rel="stylesheet" href="style.css">

  @yield('style_css')
  
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="fontawesome/css/all.css" rel="stylesheet">
	<link rel="icon" href="img/gambar.png"></head>
<body>
  @include('components.e-commerce.navbar')

  @yield('content')

  @include('components.e-commerce.footer')
</body>

</html>
