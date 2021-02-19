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
                <div class="small-box bg-aqua"> 
                    <div class="inner" style="padding-right: 100px">
                        <h3 class="text-white">{{count($tipos)}}</h3>  
                        <p>Total de Tipos de Spa</p>  
                    </div>
                    <div class="icon">
                        <i class="fa fa fa-building" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12">
            <div class="box box-info" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-building"></i> Tipo de spa </h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-tipo"  data-backdrop="static"><i class="fa fa-plus-circle"></i> Adicionar</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
          

            <div class="box box-info">
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
                            <th style="text-align: center;">Operações</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($tipos as $tipo)
                             <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>{{$tipo->tipo}}</td>
                                <td>{{$tipo->descricao}}</td>
                               
                                   <td style="text-align: center;">
                                        <div class="btn-group">
                                            <a title="Editar"  data-toggle="modal" data-target="#modal-editar-tipospa"    data-whatevernome="{{$tipo->tipo }}"
                                             data-whateverdescricao="{{ $tipo->descricao }}"
                                             data-whatever="{{ $tipo->id }}"  class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </a>

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



@include('tipospa.modal.create')
@include('tipospa.modal.edit')
@endsection


@section('javascript')


   

   

@endsection