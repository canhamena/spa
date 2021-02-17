<div class="modal fade" id="modal-create-spa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registo de spa</h4>
              </div>
              <div class="modal-body">
                @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
                 <form class="form-horizontal" id="entryForm" action="{{url('spa/post')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                <div class="nav-tabs-custom">
                   
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Dados do spa</a></li>
              <li><a href="#timeline" data-toggle="tab">Endereço</a></li>
              <li><a href="#settings" data-toggle="tab">Contatco</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                
               
               
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nome<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do spa">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Tipo de spa<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" multiple="multiple" 
                        style="width: 100%;" name="tipo_spa[]">
                        @foreach($spa_tipos as $spa_tipo)
                              <option value="{{$spa_tipo->id}}">{{$spa_tipo->tipo}}</option>
                        @endforeach
                             
                         </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Serviços<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" multiple="multiple" 
                        style="width: 100%;" name="tipo_servico[]">
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
                      <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição"></textarea>
                    </div>
                  </div>
                 
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                 
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Província<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="provincia" id="provincia">
                        <option disabled="" selected=""> Selecione </option>
                            @foreach($provincias as $provincia)
                              <option value="{{$provincia->id}}">{{$provincia->nome}}</option>
                            @endforeach
                         </select>

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Município<span class="text-danger">*</span></label>
                       <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="municipio" id="municipio">
                       
                            
                         </select>

                    </div>
                  </div>
                    <div class="form-group has-feedback @error('descricao') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Descrição</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="descricao" name="descricao_local" placeholder=""></textarea>
                    </div>
                    <span class="text-danger">
                        @error('descricao')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Rua</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rua" placeholder="Rua">
                    </div>
                  </div>
              
                </div>
               
             
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
               
                 
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
                       <input type="email" class="form-control" id="inputName" name="email" placeholder="E-mail">
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
                      <input type="text" class="form-control" id="Whatsap" name="whatsap" placeholder="Whatsap">
                    </div>
                  </div>
                 
                  
               
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
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