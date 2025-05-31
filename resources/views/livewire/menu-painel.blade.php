<div>
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body mb-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}"><i class="bi bi-cast"></i> Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <span class="text text-light"><i class="bi bi-person"></i>{{auth()->user()->name}} <a class="text-decoration-none" href="#" wire:click="logout"> (Sair)</a></span> 
        </li>
      </ul>

    </div>
  </div>
</nav>
</div>
