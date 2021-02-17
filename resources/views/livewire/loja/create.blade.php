    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" wire:click.prevent="limpaCampos()" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-circle"></i> <b>Registar loja</b></h5>
                </div>
               <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="text" class="form-control" required id="exampleFormControlInput1" placeholder="" wire:model="nome">
                            @error('nome') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Endereço</label>
                            <textarea class="form-control" id="exampleFormControlInput2" wire:model="endereco" rows="4"></textarea>
                            @error('endereco') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Descrição</label>
                            <textarea class="form-control" id="exampleFormControlInput2" wire:model="descricao" rows="4"></textarea>
                            @error('descricao') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-btn" data-dismiss="modal"> Cancelar</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-info close-modal"><i class="fa fa-check"></i> Salvar</button>
                </div>
            </div>
        </div>
    </div>
