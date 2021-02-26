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
            <div class="box box-info" style="padding: 5px;"> 
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-calendar-check-o"></i> Agenda - Tipo de Serviço </h3>
                    <div class="box-tools">
                        
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
                            <th>Tipo de serviço </th>
                            <th>Data de agendamento </th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($agendas as $agenda)
                            @if(isset($agenda->tiposervico)) 
                            @foreach($agenda->tiposervico as $tiposervico)
                                <tr>
                                    <td>{{  $loop->index +1 }}</td>
                                        <td>
                                            {{ $tiposervico->nome }}     
                                        </td>
                                    <td>{{ $agenda->data_inicio }}</td> 
                                    
                                </tr>
                            @endforeach
                            @endif
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