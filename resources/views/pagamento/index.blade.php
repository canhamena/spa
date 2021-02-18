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
      <div class="col-md-12">
            <div class="box box-´dsefault" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-dollar"></i> Pagamentos </h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-pagamento"  ><i class="fa fa-plus-circle"></i> Adicionar</a>

                        </div>
                    </div>
                </div>
            </div>
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




@endsection


@section('javascript')


   

   

@endsection