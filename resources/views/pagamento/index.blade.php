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
        <div class="col-lg-4 col-xs-6">  
            <!-- small box --> 
            <a href="" >
                <div class="small-box bg-green">
                    <div class="inner" style="padding-right: 100px">
                        <h3 class="text-white">{{count($pagamentos)}}</h3>
                        <p>Total de Pagamentos</p> 
                    </div>
                    <div class="icon">
                        <i class="fa fa fa-dollar" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
            <div class="box box-info" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-dollar"></i> Pagamentos </h3>
                    <div class="box-tools">
                        <div class="box-tools"> 
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-pagamento" data-backdrop="static"  ><i class="fa fa-plus-circle"></i> Adicionar</a>
                          <a class="btn btn-default btn-sm" href="{{route('pdf.pagamento')}}" target="_blank"><i class="fa fa-print"></i> Imprimir</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
          

            <div class="box box-info">
                <div class="box-header">
                   
                    <div class="box-tools">
                        <div class="box-tools" >
                            
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
            
                   <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nº da factura</th>
                            <th>Nome do cliente </th>
                            <th>Utilizador</th>
                            <th>Total pago</th>
                            <th style="text-align: center;">Operações</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                             <tr>

                              @foreach($pagamentos as $pagamento)

                                <td>{{$loop->index +1}}</td>
                                <td>{{$pagamento->numero_pagamento}}</td>
                                <td>{{$pagamento->nome_cliente}}</td>
                                <td>{{Auth::user()->name}}</td>
                                    @php
                                      $total = 0;
                                      foreach($pagamento->tiposervicopagamento as $pago){
                                           $total += $pago->tiposervico->preco*$pago->qtd;
                                        }
                                    @endphp
                                <td style="text-align: right;">{{number_format($total,2,',','.').' AOA'}}</td>
                            
                                   <td style="text-align: center;">
                                        <div class="btn-group">
                                            <a title="Visualizar" href="{{url("pagamento/".base64_encode($pagamento->id)."/show")}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                            </a>


                                        </div>
                                        <div class="btn-group">
                                            <a title="Editar"  href="{{url("pagamento/".base64_encode($pagamento->id)."/delete")}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                        </div>
                                        <div class="btn-group">
                                            <a title="Gerar factura"  href="{{url('pdf/factura/'.base64_encode($pagamento->id)."")}}" target="_blank" class="btn btn-default btn-sm"><i class="fa fa-file-pdf-o"></i></a>
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
        </div>
        <!-- /.col -->
    </div>


 @include('pagamento.modal.create')

@endsection


@section('javascript')


   

   

@endsection