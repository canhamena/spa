<div class="modal fade" id="modal-create-reserva">
<div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-calendar"></i> Adicionar reserva</h4>
              </div>
              <div class="modal-body">
                @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
                 <form class="form-horizontal" id="entryForm" action="{{url('reserva/store')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                <div class="nav-tabs-custom">
                   
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Dados do utente</a></li>
              <li><a href="#timeline" data-toggle="tab">Dados da reserva</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                
    
                  <div class="form-group has-feedback @error('nome') has-error @enderror">
                    <label for="inputName" class="col-sm-2 control-label">Nome<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome ">
                    </div>
                    <span class="text-danger">
                        @error('nome')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>

                  <div class="form-group has-feedback @error('telefone') has-error @enderror">
                    <label for="inputName" class="col-sm-2 control-label">Telefone<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone ">
                    </div>
                    <span class="text-danger">
                        @error('telefone')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group has-feedback @error('email') has-error @enderror">
                    <label for="inputName" class="col-sm-2 control-label">E-mail<span class="text-danger"></span></label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="email" placeholder="E-mail ">
                    </div>
                    <span class="text-danger">
                        @error('email')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">

                 <div class="form-group has-feedback @error('provincia_spa') has-error @enderror">
                    <label for="inputEmail" class="col-sm-2 control-label">Província<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="provincia_spa" id="provincia_spa">
                        <option disabled="" selected=""> Selecione </option>
                            @foreach($provincias as $provincia)
                              <option value="{{$provincia->id}}">{{$provincia->nome}}</option>
                            @endforeach
                         </select>

                    </div>
                    <span class="text-danger">
                        @error('provincia_spa')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('localidade') has-error @enderror">
                    <label for="inputEmail" class="col-sm-2 control-label">Localidade<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="localidade" id="localidade">
                        
                            
                         </select>

                    </div>
                    <span class="text-danger">
                        @error('localidade')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>

                <div class="form-group has-feedback @error('servico') has-error @enderror">
                    <label for="inputEmail" class="col-sm-2 control-label">Serviço<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <select class="form-control select2" 
                        style="width: 100%;" name="servico" id="servico">
                        <option disabled="" selected=""> Selecione </option>
                            @foreach($spa->tiposervico as $servico)
                              <option value="{{$servico->id}}">{{$servico->nome}}</option>
                            @endforeach
                         </select>

                    </div>
                     <span class="text-danger">
                        @error('servico')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                 
                  <div class="form-group has-feedback @error('tiposervico') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Tipo de serivço<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                       <select class="form-control select2" multiple="multiple" name="tiposervico[]" id="tiposervico" 
                        style="width: 100%;">
                       
                             
                      
                       </select>

                    </div>
                      <span class="text-danger">
                        @error('tiposervico')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group has-feedback @error('qtd_pessoa') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Quantidade de pessoas<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                       <select class="form-control select2" multiple="multiple" name="qtd_pessoa[]" 
                        style="width: 100%;" id="qtd_pessoa" required="">
                      
                              <option value="1">Uma</option>
                              <option value="2">Duais</option>
                              <option value="3">Três</option>
                              <option value="4">Quatro</option>
                              <option value="5">Cinco</option>
                       
                       </select>

                    </div>
                    <span class="text-danger">
                        @error('qtd_pessoa')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                    <div class="form-group has-feedback @error('data_atendimento') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Data<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                     <input type="text" name="data_atendimento" class="form-control" id="datepicker" required="">
                    </div>
                    <span class="text-danger">
                        @error('data_atendimento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('hora_atendimento') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Hora</label>

                    <div class="col-sm-10">
                     <!--<input type="time" name="hora_atendimento" class="form-control">-->

                     <input type="time"  name="hora_atendimento" class="form-control timepicker">

                    
                    </div>
                    <span class="text-danger">
                        @error('hora_atendimento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   
              
                </div>
               
            
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
        telefone: {
          required: true,
        },
        provincia : {
             required: true;
          }, 
          localidade : {
             required: true;
          },
           servico : {
             required: true;
          },tiposervico : {
             required: true;
          },
          qtd_pessoa: {
             required: true;
          },
          data_atendimento:{
             required: true;
          }

        }

    });
 //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
     //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
</script>