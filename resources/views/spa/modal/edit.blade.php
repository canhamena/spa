<div class="modal fade" id="modal-edit-spa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar spa</h4>
              </div>
              <div class="modal-body">
                @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
                 <form class="form-horizontal" id="entryForm" action="{{url('spa/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                @if(isset($spa))
                <input type="hidden" name="spa_id" value="{{$spa->id}}">
               
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nome<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome" id="nome" value="{{$spa->nome}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tipo de spa<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" multiple="multiple" 
                        style="width: 100%;" name="tipo_spa[]">
                        @foreach($spa->tipospa as $spa_tipo)
                              <option selected="" value="{{$spa_tipo->id}}">{{$spa_tipo->tipo}}</option>
                            @endforeach
                        @foreach($spa_tipos as $spa_tipo)
                              <option value="{{$spa_tipo->id}}">{{$spa_tipo->tipo}}</option>
                        @endforeach
                             
                         </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Serviços <span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" multiple="multiple" multiple data-live-search="true" 
                        style="width: 100%;" name="tipo_servico[]">
                            @foreach($spa->tiposervico as $servico)
                              <option selected="" value="{{$servico->id}}">{{$servico->nome}}</option>
                            @endforeach
                              @foreach($servicos as $servico)
                                  <option value="{{$servico->id}}">{{$servico->nome}}</option>
                             @endforeach
                             
                         </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Imagem</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="imagem"  >
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Logotipo</label>

                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="logo" name="logo" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Descrição</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="descricao" name="descricao" value="">
                        {{$spa->descricao}}
                      </textarea>
                    </div>
                  </div>
                 
                @endif
              
            
              </div>
              <div class="modal-footer" style="margin-left: 65%;">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle"></i> Salvar</button>
              </div>
            </div>

            <!-- /.modal-content -->
          </div>
           </form>
          <!-- /.modal-dialog -->
        </div>
        <script src="{{ asset('/platform/assets/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('/platform/assets/assets/js/messages_pt_PT.min.js')}}"></script>
<script src="{{ asset('/platform/assets/js/autoNumeric/autoNumeric.min.js')}}"></script>
<script type="text/javascript">
  new AutoNumeric('#preco', {
       decimalPlace : '2',
       decimalCharacter : ',',
       digitGroupSeparator : '.'
 })
</script>
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
        },
        tipo_servico: {
          required: true,
        },
        provincia : {
             required: true;
          }, 
          municipio : {
             required: true;
          },
           telefone : {
             required: true;
          }
        }

    });
</script>