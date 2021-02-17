<div class="modal fade" id="modal-update-marcacao">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-calendar"></i> Editar reserva</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('reserva/update')}}" method="post" enctype="multipart/form-data">
                 @csrf
                  
                  <input type="hidden" name="marcacao_id" id="id">
                 <div class="form-group has-feedback @error('data_atendimento') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Data<span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                     <input type="text" name="data_atendimento" class="form-control datepicker" id="atendimento" required="">
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

                     <input type="time"  name="hora_atendimento" id="hora" class="form-control timepicker">

                    
                    </div>
                    <span class="text-danger">
                        @error('hora_atendimento')
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
//Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
$("#entryForm").validate({
         errorElement:"em",
          errorPlacement:function($,t){
            $.addClass("help-block"),
          $.insertAfter(t)},
          highlight:function(t,n,a){$(t).parents(".form-group").addClass("has-error").removeClass("has-success")},
          unhighlight:function(t,n,a){$(t).parents(".form-group").addClass("has-success").removeClass("has-error")},

       rules: {
        data_atendimento: {
             required: true
          },
          hora_atendimento: {
             required: true
          }
          
        }

    });


     //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    });
</script>