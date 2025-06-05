 <div>
    <h2>Cadastro de alunos</h2>
        <form class="mt-5">
            <div class="row">
             <div class="col-md-8 mb-3">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" wire:model="nome" name="nome" class="form-control">           
             </div>

              <div class="col-md-4 mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" name="telefone" wire:model="telefone" x-mask="(99) 9.9999-9999" class="form-control">           
             </div>

             <div class="col-md-9 mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" wire:model="email" name="email" class="form-control">           
             </div>
              <div class="col-md-3 mb-3">
                <label for="email" class="form-label">CEP</label>
                <input type="text" wire:model="cep" name="email" x-mask="99999-999" class="form-control">           
             </div>

            </div>
            <div class="row">
                <button class="btn btn-success">Cadastrar</button>
            </div>
        </form>
   </div>
