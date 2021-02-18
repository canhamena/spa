<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close"  wire:click.prevent="limpaCampos()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-edit"></i> <b>Editar utilizador</b></h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="role">Perfil<span class="text-danger">*</span></label>

                         <select class="form-control select2" 
                            style="width: 100%;"  wire:model="role_id">
                            <option value=""></option>
                           @foreach($roles as $role)
                              <option value="{{ $role->id }}">{{ $role->name }}</option>
                           @endforeach
                           </select>
                            @error('role_id') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    <div class="form-group">
                        <input type="hidden" wire:model="user_id">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" wire:model="name" placeholder="">
                        @error('nome') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="email" class="form-control" wire:model="email">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="">Palavra-passe</label>
                        <input type="password" class="form-control" wire:model="password">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    
                     <div class="form-group">
                                <label for="role">Posto<span class="text-danger">*</span></label>

                                <select class="form-control"  wire:model="localizacao_id">
                                    <option value=""></option>
                                    @foreach($postos as $posto)
                                     
                                     <option value="{{ $posto->id }}" 
                                      >{{ $posto->codigo }}</option>

                                    @endforeach
                                  </select>
                                  @error('localizacao_id') <span class="text-danger error">{{ $message }}</span>@enderror
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
