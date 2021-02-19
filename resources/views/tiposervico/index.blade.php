@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Tipo de serviço')
@section('subtitle','Listar')

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
                <div class="small-box bg-lime">
                    <div class="inner" style="padding-right: 100px">
                        <h3 class="text-white">{{count($tiposervicos)}}</h3> 
                        <p>Total de Tipos de Serviço</p> 
                    </div>
                    <div class="icon">
                        <i class="fa fa fa-tasks" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
            <div class="box box-´dsefault" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-tasks"></i> Tipo de  Serviço</h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-tiposervico" data-backdrop="static" ><i class="fa fa-plus-circle"></i> Adicionar</a>

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
                            <th>Nome </th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Serviço</th>
                            <th style="text-align: center;">Operações</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($tiposervicos as $tiposervico)
                             <tr>
                                <td>{{  $loop->index +1 }}</td>
                                <td>{{ $tiposervico->nome }}</td>
                                <td>{{ $tiposervico->descricao }}</td>
                                <td style="text-align: right;">{{number_format($tiposervico->preco,2,',','.').' AOA'}}</td>
                                <td>{{ $tiposervico->servico->nome }}</td>
                               
                                   <td style="text-align: center;">
                                        <div class="btn-group">
                                            <a title="Editar" data-toggle="modal" data-target="#modal-editar-tiposervico"    data-whatevernome="{{$tiposervico->nome }}"
                                             data-whateverdescricao="{{ $tiposervico->descricao }}"
                                             data-whatever="{{ $tiposervico->id }}" data-whateverpreco="{{ $tiposervico->preco }}"    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </a>

                                        </div>
                                        <div class="btn-group">
                                        <a href="{{url("tiposervico/".base64_encode($tiposervico->id)."/delete")}}" class="btn btn-danger btn-sm" ><i class="fa fa-remove"></i> </a>
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

@include('tiposervico.modal.create')
@include('tiposervico.modal.edit')


@endsection


@section('javascript')


   

   

@endsection