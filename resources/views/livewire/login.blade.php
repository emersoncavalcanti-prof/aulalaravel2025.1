<div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
        
                        <!-- Formulário de login -->
                        <form method="POST" action="/login">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>

                            <div class="d-grid">
                                <a class="btn btn-success mb-1" href="{{route('cadastro')}}">Cadastre-se</a>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>