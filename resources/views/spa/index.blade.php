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
                 $imagem = null;
               if(isset($spa->imagem)){
                   $imagem = "storage/".$spa->imagem;
             }
               

              @endphp
              <img class="profile-user-img img-responsive " src="{{asset($imagem)}}" style="width: 100%; height: 270px; " >

              <ul class="list-group list-group-unbordered" >
                <div class="box-body">
                 <li class="list-group-item active" style="opacity:0.6;"><b> &nbsp;&nbsp;Informação geral do spa</b>
                    
                    </li>
                  
                <li class="list-group-item">
                  <b>Nome : </b> 
                  @if(isset($spa)) 
                    {{$spa->nome}} 
                  @endif
                </li>
                <li class="list-group-item">
                  <b>Tipo : </b> 
                  @if(isset($spa->tipospa))
                    @foreach($spa->tipospa as $tipospa)
                      {{$tipospa->tipo.' , '}}
                    @endforeach
                  @endif
                   
                </li>
                
                
                 <li class="list-group-item">
                  <b>Descrição : </b> 
                   @if(isset($spa))
                    {{$spa->descricao}}
                  @endif
                 
                </li>
                
                  </div>
              </ul>

           <div style="text-align: center;">
                <a href="{{ URL::previous() }}" class="btn btn-default btn-sm"><b><i class="fa fa-arrow-left"></i> Voltar</b></a>
                 @if(isset($spa))
                 <a href="" data-toggle="modal" data-target="#modal-edit-spa" data-backdrop="static" class="btn btn-warning btn-sm"><b> <i class="fa  fa-edit"></i> Editar </b></a>
                 @else
                    <a href="" data-toggle="modal" data-target="#modal-create-spa" data-backdrop="static" class="btn btn-info btn-sm"><b> <i class="fa  fa-check"></i> Adicionar </b></a>
                 @endif
                
                <a href="{{route('pdf.spa')}}" class="btn btn-default btn-sm" target="_blank"><i class="fa fa-file-pdf-o"></i> Imprimir</a>
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
            <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-black-tie"></i> Endereço</a></li>
            <li ><a href="#tab_2" data-toggle="tab"><i class="fa fa-phone"></i> Contactos</a></li>
            <li ><a href="#tab_3" data-toggle="tab"><i class="fa fa-bullseye"></i> Serviços</a></li>
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
                          <a style="margin-bottom: 10px;" href="" data-toggle="modal" data-target="#modal-create-endereco" data-backdrop="static"  data-whatever="" id="reference" class="btn btn-default pull-right"><i class="fa fa fa-plus-circle fa-1x"></i>  Adicionar endereço</a>

                 <br>
                <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Refência</th>
                     <th >Província</th>
                     <th >Município</th>
                     <th >Rua</th>
                     <th >Descrição</th>
                    
                    
                     <th style="text-align: center;">Operações</th>
                    </tr>
                    </thead>
                    <tbody>
                  @if(isset($spa))
                   @foreach($spa->endereco as $endereco)
                      <tr>
                      <td>{{  $loop->index +1 }}</td>
                        <td>{{  $endereco->codigo }}</td>
                      <td>
                       @if(isset($endereco->municipio->provincia))
                        {{$endereco->municipio->provincia->nome}}
                        @endif
                  
                      </td>
                      <td> 
                        @if(isset($endereco->municipio))
                        {{$endereco->municipio->nome}}
                        @endif
                      </td>
                      <td>
                       
                         {{$endereco->rua}}
                        

                      </td>
                      <td>{{$endereco->descricao}}</td>
                      
                     
                      <td>
                     <div class="btn-group" style="">
                        <a title="Editar" href=""  data-toggle="modal" data-target="#modal-editar-endereco" data-whateverrua="{{$endereco->rua }}"
                        data-whateverdescricao="{{ $endereco->descricao }}"
                                             data-whatever="{{ $endereco->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        </a>
                    </div>
                      <div class="btn-group" style="">
                        <a title="Eliminar" href="{{url("localizacao/".base64_encode($endereco->id)."/delete")}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                      </a>
                    </div>

                    <div class="btn-group" style="">
                        <a title="Disponibilidade" href="#" data-toggle="modal" data-target="#modal-create-desponiblidade" data-whatever="{{ $endereco->id }}" class="btn btn-info btn-sm"><i class="fa  fa-calendar-plus-o"></i></a>
                      </a>
                    </div>
                   
                    </td>
                    </tr>
                    @endforeach
                    @endif
                    

                   </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tab_2" >
               <a style="margin-bottom: 10px;" href="" data-toggle="modal" data-target="#modal-create-contacto"  data-whatever="" id="reference" class="btn btn-default pull-right"><i class="fa fa fa-plus-circle fa-1x"></i>  Adicionar contacto</a>

                 <br>
               
                 <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                     <th >Nº do endereço</th>
                     <th >Telefone</th>
                     <th >Telemóvel</th>
                     <th >E-mail</th>
                     <th >Facebook</th>
                     <th >Whatsap</th>

                    
                     <th style="text-align: center;">Operações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contactos as $contacto)
                      <tr>
                      <td>{{$contacto->localizacao_id}}</td>
                      <td>{{$contacto->telefone}}</td>
                      <td>{{$contacto->telemovel}}</td>
                      <td>{{$contacto->email}}</td>
                      <td>{{$contacto->facebook}}</td>
                       <td>{{$contacto->whatsao}}</td>
                      
                      
                     
                      <td>
                     <div class="btn-group" style="">
                        <a title="Editar" href="" data-toggle="modal" data-target="#modal-editar-contacto" data-whatevertelefone="{{$contacto->telefone }}"
                        data-whatevertelemovel="{{ $contacto->telemovel }}"  data-whateveremail="{{ $contacto->email }}"  data-whateverfacebook="{{ $contacto->facebook }}"  data-whateverwhatsap ="{{ $contacto->whatsssao }}"
                                             data-whatever="{{ $contacto->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        </a>
                    </div>
                      <div class="btn-group" style="">
                        <a title="Eliminar" href="{{url("contacto/".base64_encode($contacto->id)."/delete")}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                      </a>
                    </div>
                   
                    </td>
                    </tr>
                    @endforeach
                  
                    

                   </tbody>
                </table>
            </div>
            <div class="tab-pane" id="tab_3" >
               
               <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                     <th >#</th>
                     <th >Nome</th>
                     <th >Descrição</th>
                     <th style="text-align: center;">Operações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($spa))
                    @foreach($spa->tiposervico as $servico)
                      <tr>
                      <td>{{  $loop->index +1 }}</td>
                      <td>{{$servico->nome}}</td>
                      <td>{{$servico->descricao}}</td>
                      
                       
                      <td>
                     <div class="btn-group" >
                        <a title="Visualizar" href="{{url("servico/".base64_encode($servico->id)."/show")}}" class="btn btn-default btn-sm" style="text-align: center;"><i class="fa fa-eye"></i></a>
                        </a>
                    </div>
                     
                   
                    </td>
                    </tr>
                  
                    @endforeach
                    @endif

                   </tbody>
                </table>

            </div>
            
            


          </div>

        </div>

      </div>

@include('spa.modal.create')
@include('spa.modal.create_desponibilidade')
@include('spa.modal.edit')
@include('endereco.create')
@include('endereco.edit')
@include('contacto.create')
@include('contacto.edit')
@endsection


@section('javascript')


   

   

@endsection