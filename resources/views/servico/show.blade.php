@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')
@section('subtitle','Página Inicial')

@section('content')
     <div class="row">
   <div class="col-md-4">
              
          <!-- Profile Image -->
          <div class="box box-info" id="a">
            <div class="box-body box-profile" id="b">
              @php 

               $imagem = "storage/".$servico->imagem;

              @endphp
              <img class="profile-user-img img-responsive " src="{{asset($imagem)}}" style="width: 100%; height: 270px; " >

              <ul class="list-group list-group-unbordered" >
                <div class="box-body">
                 <li class="list-group-item active" style="opacity:0.6;"><b> &nbsp;&nbsp;Informação geral do serviço</b>
                    
                    </li>
                  
                <li class="list-group-item">
                  <b>Nome : </b>  {{$servico->nome}} 
                </li>
                <li class="list-group-item">
                  <b>Quantidades de tipo de serviço : </b> 
                 3
                   
                </li>
                
                
                 <li class="list-group-item">
                  <b>Descrição : </b> 
                  {{$servico->´descricao}}
                 
                </li>
                
                  </div>
              </ul>
          
           <div style="text-align: center;">
                <a href="{{ URL::previous() }}" class="btn btn-default btn-sm"><b><i class="fa fa-arrow-left"></i> Voltar</b></a>
                    @if(Auth()->user()->role->id == 1)
                    <a href="" data-toggle="modal" data-target="#modal-editar-servico"   data-whatevernome="{{$servico->nome }}"
                                              data-whateverdescricao="{{ $servico->descricao }}"
                                              data-whatever="{{ $servico->id }}" class="btn btn-warning btn-sm"><b> <i class="fa  fa-edit"></i>  </b></a>
                
                <a href="{{url("servico/".base64_encode($servico->id)."/delete")}}" class="btn btn-danger  btn-sm" title="Eliminar" style="border-color: #850e10;"><i class="fa fa-remove"></i></a>
               @endif
             </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
            
        </div>




    <div class="col-md-8">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            
            <li ><a href="#tab_3" data-toggle="tab"><i class="fa fa-bullseye"></i> Tipo de serviços</a></li>
           
   </ul>

          <div class="tab-content">

           

            <div class="tab-pane active" id="tab_1" >
              @if (session('mensagem'))
                          <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert"    aria-hidden="true">&times;</button>
                                {{ session('mensagem') }}.
                          </div>
                     @endif
                     @if (session('erro'))
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('erro') }}.
                       </div>
                      @endif
                          <a style="margin-bottom: 10px;" href="" data-toggle="modal" data-target="#modal-create-tiposervico"  class="btn btn-default pull-right"><i class="fa fa fa-plus-circle fa-1x"></i>  Adicionar tipo de serviço</a>

                 <br>
                <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                     <th >Nome</th>
                     <th >Descrição</th>
                     <th >Preço</th>
                     @if(Auth()->user()->role->id == 1)
                    <th style="text-align: center;">Operação</th>
                    @endif
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($servico->tiposervico as $tiposervico)
                      <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$tiposervico->nome}}</td>
                      <td>{{$tiposervico->descricao}}</td>
                      <td style="text-align: right;">{{number_format($tiposervico->preco,2,',','.').' AOA'}}</td>
                      @if(Auth()->user()->role->id == 1)
                      <td>
                       <div class="btn-group" style="">
                        <a title="Editar" href="" data-toggle="modal" data-target="#modal-editar-tiposervico"   data-whatevernome="{{$tiposervico->nome }}"
                        data-whateverdescricao="{{ $tiposervico->descricao }}"
                        data-whatever="{{ $tiposervico->id }}" data-whateverpreco="{{ $tiposervico->preco }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        </a>
                      </div>
                      <div class="btn-group" style="">
                        <a title="Eliminar" href="{{url("tiposervico/".base64_encode($tiposervico->id)."/delete")}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                      </a>
                       </div>
                   
                        </td>
                        @endif
                       </tr>
                   @endforeach
                    

                   </tbody>
                </table>
            </div>
            
            
            


          </div>

        </div>

      </div>

@include('servico.modal.edit')
@include('tiposervico.modal.create')
@include('tiposervico.modal.edit')
@endsection


@section('javascript')


   

   

@endsection