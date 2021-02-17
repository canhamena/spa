<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close"  wire:click.prevent="limpaCampos()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> <b>Editar loja</b></h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="exampleFormControlInput1">Nome</label>
                        <input type="text" class="form-control" wire:model="nome" id="exampleFormControlInput1" placeholder="">
                        @error('nome') <span class="text-danger">{{ $message }}</span>@enderror
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-info" data-dismiss="modal"><i class="fa fa-check"></i> Salvar</button>
            </div>
       </div>
    </div>
</div>
