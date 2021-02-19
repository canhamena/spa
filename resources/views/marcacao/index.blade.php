@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa fa-calendar')
@section('module','Reservas')
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
                <i class="fa fa-info-circle"></i>  {{ session('erro') }}.
              </div>
@endif

    <div class="row">
 
      <div class="col-lg-4 col-xs-6"> 
        <!-- small box -->
        <a href="" >
            <div class="small-box bg-blue">
                <div class="inner" style="padding-right: 100px">
                    <h3 class="text-white">{{count($reservas)}}</h3>
                    <p>Total de Reservas</p>
                </div>
                <div class="icon">
                    <i class="fa fa fa-calendar" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                </div>
            </div>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
            <div class="box box-info" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-calendar"></i> Reservas </h3>
                    <div class="box-tools">
                        <div class="box-tools">
                          <a class="btn btn-info" href="#" data-toggle="modal" data-target="#modal-create-reserva" data-backdrop="static" ><i class="fa fa-plus-circle"></i> Adicionar</a>

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
                            <th>Cliente</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Data da marcação</th>
                            <th>Data de atendimento</th>
                            <th>Estado </th>
                            <th style="text-align: center;">Operações</th>
                        </tr>
                        </thead>
                        <tbody>
                               

                            @foreach($reservas as $reserva)
                            <tr>
                                <td>{{$loop->index +1}}</td>
                                <td>
                                  @if(isset($reserva->cliente))
                                  {{$reserva->cliente->nome}}
                                  @endif  
                                </td>
                                <td>
                                 @if(isset($reserva->cliente))
                                  {{$reserva->cliente->telefone}}
                                  @endif 
                                </td>
                                <td> 
                                 @if(isset($reserva->cliente))
                                  {{$reserva->cliente->email}}
                                  @endif 
                                 </td>
                                  <td> 
                                   {{date('d-m-Y',strtotime($reserva->created_at)) ?? ''}}
                                 </td>
                                  <td> 
                                    {{date('d-m-Y',strtotime($reserva->data_atendimento)) ?? ''}}
                                 </td>
                                   
                                <td style="">
                                    @if($reserva->estado == "M")
                                     
                                    <span class="label bg-yellow" >
                                             Pendente
                                    </span>
                                 
                                        
                                    @elseif($reserva->estado == "C")
                                    <span class="label bg-red">Cancelado</span>
                                    @elseif($reserva->estado == "A")
                                      <span class="label bg-green">Atendimento</span>
                                    @endif
                                </td>
                            
                                   <td style="text-align: center;">
                                        <div class="btn-group">
                                            <a title="Visualizar" href="{{url("reserva/".base64_encode($reserva->id)."/show")}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                         </div>
                                        <div class="btn-group">
                                            <a title="Editar"  href="#" data-toggle="modal" data-target="#modal-update-marcacao"    data-whateverdata="{{date('d/m/Y',strtotime($reserva->data_atendimento))}}"
                                             data-whateverhora="{{ $reserva->hora }}"
                                             data-whatever="{{ $reserva->id }}"  class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        </div>
                                        
                                         @if($reserva->estado == 'M')
                                           <div class="btn-group">
                                                 <a title="Cancelar" href="{{url("reserva/".base64_encode($reserva->id)."/cancelar")}}" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>  </a>
                                           </div>
                                         @endif
                                         <div class="btn-group">
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

@include('marcacao.modal.create')
@include('marcacao.modal.alterarData')


@endsection


@section('javascript')


@endsection