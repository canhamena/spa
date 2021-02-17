<div class="modal fade" id="modal-create-desponiblidade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-calendar-plus-o"></i> Adicionar desponiblidade de atendimento</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('agenda/store')}}" method="post" enctype="multipart/form-data">
               
                  @csrf
                     
                   <div class="form-group has-feedback @error('servico') has-error @enderror">
                    <label for="inputEmail" class="col-sm-3 control-label">Serviço <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <select class="form-control select2"   
                        style="width: 100%;" name="servico" id="servico">

                           <option disabled="" selected=""> selecione </option>
                            @foreach($spa->tiposervico as $servico)
                              <option  value="{{$servico->id}}">{{$servico->nome}}</option>
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
                    <label for="inputEmail" class="col-sm-3 control-label">Tipo de serviço <span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <select class="form-control select2"  
                        style="width: 100%;" name="tiposervico[]" multiple="multiple" id="tiposervico">

                        
                             
                         </select>
                    </div>
                    <span class="text-danger">
                        @error('tiposervico')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group has-feedback @error('data_inicio') has-error @enderror">
                    <label for="inputExperience" class="col-sm-3 control-label">Data inicio<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                     <input type="date" name="data_inicio" class="form-control" min="<?php echo date('Y-m-d'); ?>"  required="">
                    </div>
                    <span class="text-danger">
                        @error('data_inicio')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('data_fim') has-error @enderror">
                    <label for="inputExperience" class="col-sm-3 control-label">Data fim</label>

                    <div class="col-sm-9">
                     <input type="date" name="data_fim" class="form-control " min="<?php echo date('Y-m-d'); ?>"   >
                    </div>
                    <span class="text-danger">
                        @error('data_fim')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group has-feedback @error('inicio_atendimento') has-error @enderror">
                    <label for="inputExperience" class="col-sm-3 control-label">Inicio de atendimento<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                     <!--<input type="time" name="hora_atendimento" class="form-control">-->

                     <input type="time"  name="inicio_atendimento" class="form-control timepicker" required="">

                    
                    </div>
                    <span class="text-danger">
                        @error('inicio_atendimento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                   <div class="form-group has-feedback @error('fim_atendimento') has-error @enderror">
                    <label for="inputExperience" class="col-sm-3 control-label">Fim de atendimento<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                     <!--<input type="time" name="hora_atendimento" class="form-control">-->

                     <input type="time"  name="fim_atendimento" class="form-control timepicker" required="">

                    
                    </div>
                    <span class="text-danger">
                        @error('hora_atendimento')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                  <div class="form-group has-feedback @error('qtd_cliente') has-error @enderror">
                    <label for="inputExperience" class="col-sm-3 control-label">Qunatidade de cliente diário<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                     <input type="number"  name="qtd_cliente" class="form-control timepicker">

                    
                    </div>
                    <span class="text-danger">
                        @error('qtd_cliente')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                
                  <input type="hidden" name="localizacao_id" class="form-control" id="endereco">
                  
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
        servico: {
          required: true
        },
        tiposervico: {
          required: true
        },
        data_inicio: {
          required: true
        },
        inicio_atendimento: {
          required: true
        },
         fim_atendimento: {
          required: true
        },
        qtd_cliente: {
          required: true
        }
      }

    });


    



</script>