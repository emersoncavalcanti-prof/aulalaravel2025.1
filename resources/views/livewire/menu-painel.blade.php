<div>
  <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body mb-5" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="bi bi-list"></i> Dashboard</a>
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



<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

      <ul class="">
        <li class="list-group-item"><a href="#" class="text text-secondary text-decoration-none"><i class="bi bi-person"></i> Cadastro de Alunos</li></a>
      </ul>

  </div>
</div>
</div>
