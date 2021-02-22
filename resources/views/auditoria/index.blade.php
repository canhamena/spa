@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa fa-calendar')
@section('module','Auditória')
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
 
      
    </div>

    <div class="row">
      <div class="col-md-12">  
            <div class="box box-info" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-map-o"></i> Auditória </h3>
                    <div class="box-tools">
                        <div class="box-tools">
                         
                          <a class="btn btn-default btn-sm" href="" target="_blank"><i class="fa fa-print"></i> Imprimir</a> 
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
                            <th>Utlizador</th>
                            <th>Perfil</th>
                            <th>Posto</th>
                            <th>Acção</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($auditorias as $auditoria)    
                         <tr>
                            <td>{{$loop->index +1}}</td>
                            <td>
                               @if(isset($auditoria->user))
                                  {{$auditoria->user->name}}
                              @endif
                            </td>
                            <td>
                              @if(isset($auditoria->user->role))
                              {{$auditoria->user->role->description}}
                              @endif
                            </td>
                            <td>
                               @if(isset($auditoria->posto))
                                   {{$auditoria->posto->codigo}}
                                @else
                                Geral
                              @endif
                            </td>
                            <td>{{$auditoria->accao}}</td>
                            <td>
                              {{date('d-m-Y H:s:m',strtotime($auditoria->created_at))}}</td>
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