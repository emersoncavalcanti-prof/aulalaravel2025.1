<div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
        
                        <!-- Formulário de login -->
                        <form wire:submit="login">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" wire:model="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus>
                                @error('email') <span class="text text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" wire:model="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                                @error('password') <span class="text text-danger">{{$message}}</span>@enderror
                            </div>

                            <div class="text-center mb-2">
                                @if(session()->has('error'))
                                <span class="text text-danger">{{session()->get('error')}}</span>
                                @endif
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mb-1">Entrar</button>
                            </div>
                            <div class="d-grid">
                                <a class="btn btn-success" href="{{route('cadastro')}}">Cadastre-se</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>