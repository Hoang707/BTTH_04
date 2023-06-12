<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <title>Your Blog</title>
 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="#">Blog</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" ariacontrols="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav mr-auto">
 <li class="nav-item">
 <a class="nav-link" href="/posts">Posts</a>
 </li>
 </ul>
 </div>
 </nav>
 <main class="py-4">
 @yield('content')
 </main>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>
 <!-- Bootstrap JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
