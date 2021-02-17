<div class="modal fade" id="modal-editar-contacto">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-phone"></i> Adicionar Contacto</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('contacto/update')}}" method="post" enctype="multipart/form-data">
               
                  @csrf

                  <input type="hidden" name="contacto_id" id="id">
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Endereço<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="localizacao_id" id="localizacao_id" required="" >
                        <option disabled="" selected=""> Selecione </option>
                            @foreach($localizacaos as $localizacao)
                                  <option value="{{$localizacao->id}}">{{$localizacao->codigo}}</option>
                            @endforeach
                         </select>

                    </div>
                  </div>
                 <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Telefone<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Telemóvel</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telemovel" name="telemovel" placeholder="Telemóvel">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">E-mail</label>

                    <div class="col-sm-10">
                       <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Whatsap</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="whatsap" name="whatsap" placeholder="Whatsap">
                    </div>
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
        telefone: {
          required: true
        },
        localizacao_id: {
          required: true
        }
        }

    });
</script>