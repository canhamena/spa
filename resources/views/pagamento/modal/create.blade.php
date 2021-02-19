<div class="modal fade" id="modal-create-pagamento">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-dollar"></i> Adicionar pagamento</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('pagamento/store')}}" method="post" enctype="multipart/form-data">
               
                  @csrf
                  <div class="form-group has-feedback @error('nome') has-error @enderror">
                    <label for="inputName" class="col-sm-3 control-label">Nome <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <input type="text" name="nome" id="nome" class="form-control" id="inputName" placeholder="Nome do cliente" required>
                    </div>
                    <span class="text-danger">
                        @error('nome')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('data_pagamento') has-error @enderror">
                    <label for="inputName" class="col-sm-3 control-label">Data<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" name="data_pagamento" id="datepicker" class="form-control"  >
              </div>
                      
                    </div>
                    <span class="text-danger">
                        @error('data_pagamento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('tipo_pegamento') has-error @enderror" id="">
                    <label for="inputName" class="col-sm-3 control-label">Tipo <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <select class="form-control " name="tipo_pegamento" id="mySelect"  required="">
                  <option selected="selected" disabled="">Selecione</option>
                  @foreach($tipopagamentos as $pagamento)
                  <option value="{{$pagamento->id}}">{{$pagamento->tipo}}</option>
                  @endforeach
                  
                </select>
                    </div>
                    <span class="text-danger">
                        @error('tipo_pegamento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('referencia') has-error @enderror" id="inputOculto">
                    <label for="inputName" class="col-sm-3 control-label">Referência <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                    <input type="number" name="referencia" class="form-control" id="inpu_id">
                    </div>
                    <span class="text-danger">
                        @error('referencia')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
          
              </div>
              <div class="modal-footer" style="margin-left: 68%;">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle"></i> Salvar</button>
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>



  
<script src="{{ asset('/platform/assets/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('/platform/assets/assets/js/messages_pt_PT.min.js')}}"></script>
<script src="{{ asset('/platform/assets/js/autoNumeric/autoNumeric.min.js')}}"></script>


<script type="text/javascript">


$("#entryForm").validate({
         errorElement:"em",
          errorPlacement:function($,t){
            $.addClass("help-block"),
          $.insertAfter(t)},
          highlight:function(t,n,a){$(t).parents(".form-group").addClass("has-error").removeClass("has-success")},
          unhighlight:function(t,n,a){$(t).parents(".form-group").addClass("has-success").removeClass("has-error")},

       rules: {
        nome: {
          required: true,
          minlength: 4
        },
        nome: {
          data_pagamento: true
          
        },tipo_pagamento: {
          required: true
        }
        
        }

    });



</script>