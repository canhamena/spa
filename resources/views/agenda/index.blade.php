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
        <div class="col-lg-4 col-xs-6">  
            <!-- small box -->
            <a href="" >
                <div class="small-box bg-yellow"> 
                    <div class="inner" style="padding-right: 100px">
                        <h3 class="text-white">{{count($agendas)}}</h3> 
                        <p>Total de Agendamento</p> 
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-check-o" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div> 
                </div>
            </a>
        </div>
    </div>

    <div class="row">
      <div class="col-md-12"> 
            <div class="box box-info" style="padding: 5px;"> 
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Agenda </h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-desponiblidade" data-backdrop="static" ><i class="fa fa-plus-circle"></i> Adicionar</a>
                          <a class="btn btn-default btn-sm" href="{{route('pdf.agenda')}}" target="_blank"><i class="fa fa-print"></i> Imprimir</a> 
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
                            <th>Serviço </th>
                            <th>Data de Inicio </th>
                            <th>Data de Fim</th>
                            <th>Hora de Inicio</th>
                            <th>Hora de Fim</th>
                            <th style="text-align: center;">Operações</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($agendas as $agenda)
                             <tr>
                                <td>{{  $loop->index +1 }}</td>
                                <td>
                                    @if(isset($servicos->tiposervico))
                                        @foreach($servicos->tiposervico as $tiposervico)
                                            {{ $tiposervico->servico->nome }}
                                        @endforeach
                                    @endif
                                </td> 
                                <td>{{ $agenda->data_inicio }}</td>
                                <td>{{ $agenda->data_fim }}</td>
                                <td>{{ $agenda->atendimento_inicio }}</td>
                                <td>{{ $agenda->atendimento_fim }}</td> 
                                
                                <td style="text-align: center;">
                                    <div class="btn-group">
                                        <a title="Ver mais" href="{{url("agenda/".base64_encode($agenda->id)."/show")}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                    </div>
                                    @if ($agenda->data_fim < date('Y-m-d'))
                                        <div class="btn-group">
                                            <a title="Editar"  data-toggle="modal" data-target="#modal-edit-desponibilidade"   data-whatevernome="{{$tiposervico->nome }}"
                                                data-whateverdatainicio="{{ $agenda->data_inicio }}" data-whateverdatafim="{{$agenda->data_fim}}"
                                                data-whateverhorainicio="{{$agenda->atendimento_inicio}}" data-whateverhorafim="{{$agenda->atendimento_fim}}"
                                                data-whatever="{{ $agenda->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            </a>
                                        </div>
                                    @endif
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

    @include('spa.modal.create_desponibilidade')
    @include('spa.modal.edit_desponibilidade')

@endsection


@section('javascript')


   

   

@endsection