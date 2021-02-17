<div class="modal fade" id="modal-editar-pagamento">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-dollar"></i> Editar pagamento</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
                <form class="form-horizontal" id="entryForm" action="{{url('pagamento/update_factura')}}" method="post" enctype="multipart/form-data">
               
                  @csrf
                  <input type="hidden" name="pagamentoservico_id" id="id">
                  <input type="hidden" name="pagamento_id" value="{{$pagamento->id}}">
                  <div class="form-group has-feedback @error('tipo_servico') has-error @enderror">
                    <label for="inputName" class="col-sm-3 control-label">Tipo de serviços <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <select class="form-control select2" name="tipo_servico" id="tipo_servico" style="width: 100%;" required="">
                             <option selected="selected" disabled="">Selecione</option>
                                @foreach($tipo_servicos as $tipo_servico)
                                  <option value="{{$tipo_servico->id}}">{{$tipo_servico->nome}}</option>
                                @endforeach
                  
                         </select>
                    </div>
                    <span class="text-danger">
                        @error('quantidade')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('quantidade') has-error @enderror">
                    <label for="inputName" class="col-sm-3 control-label">Quantidade <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <input type="number" name="qtd" id="qtd" class="form-control" id="inputName" placeholder="" required>
                    </div>
                    <span class="text-danger">
                        @error('quantidade')
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
        tipo_servico: {
          required: true
        }, 
        qtd: {
          required: true
        }
        }

    });
</script>