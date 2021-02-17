<div class="modal fade" id="modal-editar-tipospa">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> <i class="fa fa-bullseye"></i> Editar tipo de spa</h4>
              </div>
              <div class="modal-body">

               @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
               
                <form class="form-horizontal" id="entryForm" action="{{url('tipo/update')}}" method="post" enctype="multipart/form-data">
               
                  @csrf

                  <input type="hidden" name="tipo_id" id="id">
                  <div class="form-group has-feedback @error('nome') has-error @enderror">
                    <label for="inputName" class="col-sm-2 control-label">Nome <span class="text-danger">*</span></label>

                    <div class="col-sm-10">
                      <input type="text" name="nome" id="nome" class="form-control" required="">
                    </div>
                    <span class="text-danger">
                        @error('nome')
                          {{ $message }}
                        @enderror
                      </span>
                  </div>
                 
                  

                  <div class="form-group has-feedback @error('descricao') has-error @enderror">
                    <label for="inputExperience" class="col-sm-2 control-label">Descrição</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="descricao" name="descricao" placeholder=""></textarea>
                    </div>
                    <span class="text-danger">
                        @error('descricao')
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
        }
        }

    });
</script>