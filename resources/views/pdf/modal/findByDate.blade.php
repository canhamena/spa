<div class="modal fade" id="modal-relatorio-reserva">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-calendar"></i> Relatório Reserva</h4>
              </div>
              <div class="modal-body"> 

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error) 
                         <p>{{ $error }}</p>
                     @endforeach
                 </div> 
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('pdf/reserva')}}" method="post" target="_blank" enctype="multipart/form-data">
               
                  @csrf
                  
                  <div class="form-group has-feedback @error('data_reserva') has-error @enderror">
                    <label for="inputName" class="col-sm-3 control-label">Data<span class="text-danger">*</span></label>

                    <div class="col-sm-9">
                      <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="text" name="data" class="form-control datepicker"  autocomplete="off" >
              </div>
                      
                    </div>
                    <span class="text-danger">
                        @error('data_reserva')
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

    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });

</script>