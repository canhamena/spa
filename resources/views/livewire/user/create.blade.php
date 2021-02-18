    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" wire:click.prevent="limpaCampos()" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true close-btn">×</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-users"></i> <b> Adicionar utilizador</b></h5>
                </div>
               <div class="modal-body">
                    <form>

                        <div class="form-group">
                                <label for="role">Perfil<span class="text-danger">*</span></label>

                                <select class="form-control"  wire:model="role_id">
                                    <option value=""></option>
                                    @foreach($roles as $role)
                                     
                                     <option value="{{ $role->id }}">{{ $role->name }}</option>

                                    @endforeach
                                  </select>
                                  @error('role_id') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" wire:model="name">
                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control"  wire:model="email">
                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
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
                    <button type="button" class="btn btn-default close-btn" data-dismiss="modal"> Cancelar</button>
                    <button type="button" wire:click.prevent="store()" class="btn btn-info close-modal"><i class="fa fa-check"></i> Salvar</button>
                </div>
            </div>
        </div>
    </div>
