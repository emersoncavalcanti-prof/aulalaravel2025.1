<div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Cadastro</h3>
        
                        <!-- Formulário de login -->
                        <form wire:submit="cadastrar">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input wire:model="name" type="text" name="name" class="form-control" id="name" autofocus>
                                @error('name') <span class="text text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" wire:model="email" name="email" class="form-control" id="email">
                                @error('email') <span class="text text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" wire:model="password" name="password" class="form-control" id="password">
                                 @error('password') <span class="text text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-1">Cadastrar</button>
                            </div>
                            
                        </form>

                      
                    </div>
                </div>
            </div>
        </div>