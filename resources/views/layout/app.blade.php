<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
      @livewireStyles
      </head>
    <body>
    
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><i class="bi bi-cast"></i> Projeto PI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : ''}}" @if(request()->routeIs('home')) aria-current="page" @endif href="{{route('home')}}"><i class="bi bi-house-door-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('clientes') ? 'active' : ''}}"  @if(request()->routeIs('clientes')) aria-current="page" @endif href="{{route('clientes')}}"><i class="bi bi-person-fill"></i> Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('login') ? 'active' : ''}}"  @if(request()->routeIs('login')) aria-current="page" @endif href="{{route('login')}}"><i class="bi bi-lock-fill"></i> Área Restrita</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    
<div class="container">
    @yield('content')
</div>

<div class="footer container-fluid text-center">
    &copy; Todos os direitos reservados {{date('Y')}}
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    @livewireScripts
    </body>
</html>
