<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Medicio')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <!-- Uncomment below if needed -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> -->

  <!-- Bootstrap CSS (optional but recommended) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>

<body>
  <!-- Header -->
 <header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between align-items-center">
     
    <img src="{{asset ('asset/img/logo.png') }}" alt="">

    <nav id="navbar" class="navbar">
      <ul class="d-flex align-items-center list-unstyled mb-0 gap-4">
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('services') }}">Services</a></li>
        <li><a href="{{ route('department') }}">Departments</a></li>
        <li><a href="{{ route('doctor') }}">Doctors</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('appointment') }}">Appointment</a></li>
       
        

        @if (Auth::id())
         <!-- Authentication -->
                    <li>
  <form method="POST" action="{{ route('logout') }}"> 
    @csrf
    <button type="submit" class="btn btn-danger px-3 py-1">logout</button>
  </form>
</li>
@else
          
    <li>
      <a href="{{ route('login') }}" class="btn btn-primary px-3 py-1">Login</a>
    </li>
    <li>
      <a href="{{ route('register') }}" class="btn btn-primary px-3 py-1">Register</a>
    </li>
      </ul>                   
        @endif
    
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>


  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <footer id="footer" class="footer bg-dark py-4 mt-5">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">

    <!-- Logo / Brand -->
    <h4 class="logo m-0">
      <a href="{{ route('index') }}" class="text-decoration-none text-white">Medicio</a>
    </h4>

    <!-- Footer Nav Menu -->
    <ul class="d-flex align-items-center list-unstyled mb-0 gap-4">
      <li><a href="{{ route('index') }}" class="text-decoration-none text-white">Home</a></li>
      <li><a href="{{ route('about') }}" class="text-decoration-none text-white">About</a></li>
      <li><a href="{{ route('services') }}" class="text-decoration-none text-white">Services</a></li>
      <li><a href="{{ route('department') }}" class="text-decoration-none text-white">Departments</a></li>
      <li><a href="{{ route('doctor') }}" class="text-decoration-none text-white">Doctors</a></li>
      <li><a href="{{ route('contact') }}" class="text-decoration-none text-white">Contact</a></li>
      <li><a href="{{ route('appointment') }}" class="text-decoration-none text-white">Appointment</a></li>
    </ul>
  </div>

  <!-- Copyright -->
  <div class="text-center mt-3 text-secondary small">
    &copy; {{ date('Y') }} Medicio. All rights reserved.
  </div>
</footer>



  <!-- JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
