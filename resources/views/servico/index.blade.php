@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')
@section('subtitle','Página Inicial')

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
                     <h3 class="box-title"><i class="fa fa-bullseye"></i> Serviço</h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-servico"  ><i class="fa fa-plus-circle"></i> Adicionar</a>

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
                            <th>Tipos de serviço</th>
                            <th style="text-align: center;">Operação</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($servicos as $servico)
                             <tr>
                                <td>{{  $loop->index +1 }}</td>
                                <td>{{ $servico->nome }}</td>
                                <td>{{ $servico->descricao }}</td>
                                <td>0</td>
                               
                                   <td style="text-align: center;">

                                        <div class="btn-group">
                                            <a title="Ver mais" href="{{url("servico/".base64_encode($servico->id)."/show")}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>

                                        </div>
                                        <div class="btn-group">
                                            <a title="Editar"  data-toggle="modal" data-target="#modal-editar-servico"   data-whatevernome="{{$servico->nome }}"
                                              data-whateverdescricao="{{ $servico->descricao }}"
                                              data-whatever="{{ $servico->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </a>

                                        </div>
                                        <div class="btn-group">
                                        <a href="{{url("servico/".base64_encode($servico->id)."/delete")}}" class="btn btn-danger btn-sm" ><i class="fa fa-remove"></i> </a>
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

@include('servico.modal.create')
@include('servico.modal.edit')


@endsection


@section('javascript')


   

   

@endsection