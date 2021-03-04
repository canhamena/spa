@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Tipo de spa')
@section('subtitle','Listagem')

@section('content')


@if (session('mensagem'))
<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>    {{ session('mensagem') }}.
              </div>
@endif

@if (session('erro'))
<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i>    {{ session('erro') }}.
              </div>
@endif

    <div class="row">
         <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-file-text"></i> Informações da factura</h3>
            </div>
              <form class="form-horizontal">
              <div class="box-body">
                <div class="row">
                  
              
                <div class="form-group col-md-2">
                  <label for="numero" class="col-sm-3 control-label">Nº : </label>

                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control" value="{{$pagamento->numero_pagamento}}"  >
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="nome" class="col-sm-2 control-label">Nome do cliente : </label>

                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control" value="{{$pagamento->nome_cliente}}"  >
                  </div>
                </div>
               
                <div class="form-group col-md-4">
                  <label for="orgao"  class="col-sm-2 control-label"> Total : </label>
                  @php
                  $total = 0;
                  foreach($pagamento->tiposervicopagamento as $pago){
                         $total += $pago->tiposervico->preco*$pago->qtd;
                   }

                  @endphp
                 
                  <div class="col-sm-10">
                    <input type="text" readonly  class="form-control" value="{{number_format($total,2,',','.').' AOA'}}">
                  </div>
                </div>
                  </div>
               
              </div>
            
            </form>
          </div>
    

        <div class="col-xs-12">
          

            <div class="box">
                <div class="box-header">
                   
                    <div class="box-tools">
                        <div class="box-tools">
                          
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tipo de serviço </th>
                            <th>Quantidade</th>
                            <th>Preço unitário</th>
                            <th>Total</th>
                            <th style="text-align: center;">Operação</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                             <tr>
                              @foreach($pagamento->tiposervicopagamento as $servicospago)

                                <td>{{$loop->index +1}}</td>
                                <td>{{$servicospago->tiposervico->nome}}</td>
                                <td>{{$servicospago->qtd}}</td>
                                <td style="text-align: right;">{{number_format($servicospago->tiposervico->preco,2,',','.').' AOA'}}</td>
                                <td style="text-align: right;">{{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}</td>
                                
                               
                                   <td style="text-align: center;">
                                        <div class="btn-group">
                                            <a title="Editar"  data-toggle="modal" data-target="#modal-editar-pagamento" data-whateverqtd="{{ $servicospago->qtd }}" data-whatever="{{ $servicospago->id }}"      class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </a>


                                        </div>
                                        <div class="btn-group">
                                            <a title="Editar"  href="{{url("pagamento/".base64_encode($servicospago->id)."/delete_factura")}}"      class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                           
                                        </div>
                                         
                                    </td>
                                
                            </tr>
                       @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
             <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-dollar"></i> Registar pagamento</h3>
            @if($errors->any())
                 <div class="alert alert-danger">
                     @foreach($errors->all() as $error)
                         <p>{{ $error }}</p>
                     @endforeach
                 </div>
                 @endif
          <div class="box-tools pull-right">
           
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form method="post" action="{{url('pagamento/store_factura')}}" >
                   @csrf
                <input type="hidden" name="pagamento_id" value="{{$pagamento->id}}">
            <div class="col-md-6">
              <div class="form-group has-feedback @error('tipo_servico') has-error @enderror">
                <label>Tipos de serviço<span class="text-danger">*</span></label>
                <select class="form-control select2" name="tipo_servico" style="width: 100%;" required="">
                  <option selected="selected" disabled="">Selecione</option>
                  @foreach($tipo_servicos as $tipo_servico)
                  <option value="{{$tipo_servico->id}}">{{$tipo_servico->nome}}</option>
                  @endforeach
                  
                </select>
                 <span class="text-danger">
                        @error('tipo_servico')
                          {{ $message }}
                        @enderror
                </span>
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group has-feedback @error('qtd') has-error @enderror">
                <label>Quantidade<span class="text-danger">*</span></label>
                <input type="number" name="qtd" class="form-control" min="1" required="" >
              </div>
              <span class="text-danger">
                        @error('qtd')
                          {{ $message }}
                        @enderror
                </span>
            </div>

        <!-- /.box-body -->
      
      <div class="modal-footer" style="margin-left: 70%;">
            <button type="submit" class="btn btn-info"><i class="fa fa-plus-circle"></i> Salvar</button>
    
   </div>

       </form>
      </div>
        </div>
        <!-- /.col -->
    </div>
@include('pagamento.modal.edit')
@endsection
<script src="{{ asset('/platform/assets/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('/platform/assets/assets/js/messages_pt_PT.min.js')}}"></script>

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
        },
        tipo_pagamento: {
          required: true
        },
        data_pagamento: {
          required: true
        }
        }

    });
//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

   

</script>


@section('javascript')


   

   

@endsection