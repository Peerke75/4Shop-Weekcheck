<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>4Shop - M VAN OPSTAL</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/narrow-jumbotron.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="container">
      <header class="header d-flex justify-content-between align-items-center">
        <img src="{{ asset('img/4shop-logo.png') }}" alt="tag" width="80">
        <h3 class="text-muted site-title"><a href="{{ route('home') }}" class="no-link">4Shop - M VAN OPSTAL</a></h3>
        <a href="{{ route('cart') }}"><img class="cart" src="{{ url('img/cart.png') }}" alt=""></a>

    @foreach($categories as $category)
          <tr>
				
				<td>
          <a href="{{ route('category') }}" class="no-link">{{ $category->name }}</a>
				</td>
			</tr>
		@endforeach
          
      </header>
    @foreach($products as $product)
       
    @endforeach

      <footer class="footer">
        <p>
          &copy; 4Shop - M van Opstal 2023
        </p>
      </footer>

    </div>
</body>
</html>

