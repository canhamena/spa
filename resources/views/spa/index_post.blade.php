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
             
          <div class="box box-default" id="a">
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
                
                    
                <a href="" class="btn btn-default btn-sm" target="_blank"><i class="fa fa-file-pdf-o"></i> Imprimir</a>
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
            <li ><a href="#tab_2" data-toggle="tab"><i class="fa fa-phone"></i> Contacto</a></li>
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
                          

                 <br>
                 <ul class="list-group list-group-unbordered" >
                <div class="box-body">
                
                   
                
                <li class="list-group-item">
                  <b>Posto  :  </b>
                   {{$localizacao->codigo}}
                   
                </li>
                   
              <li class="list-group-item">
                  <b>Província  : </b>
                   @if(isset($localizacao->municipio->provincia))
                        {{$localizacao->municipio->provincia->nome}}
                        @endif
                  
                </li>
                <li class="list-group-item">
                  <b>Município  : </b>
                   @if(isset($localizacao->municipio))
                        {{$localizacao->municipio->nome}}
                   @endif
                 
                </li>
                <li class="list-group-item">
                  <b>Rua  : </b>
                    {{$localizacao->rua}}
                  
                </li>
                <li class="list-group-item">
                  <b>Descrição : </b>
                 
                   {{$localizacao->descricao}}
                </li>
                
                  </div>
              </ul>
               
            </div>
            <div class="tab-pane" id="tab_2" >
              
                  <ul class="list-group list-group-unbordered" >
                <div class="box-body">
                
                   
                    @if(isset($localizacao->contacto))
                <li class="list-group-item">
                  <b>Telefone  :  </b>
                     {{$localizacao->contacto->telefone}}
                   
                </li>
              <li class="list-group-item">
                  <b>Telemóvel  : </b>
                   {{$localizacao->contacto->telefone}}
                  
                </li>
                <li class="list-group-item">
                  <b>E-mail  : </b>
                   {{$localizacao->contacto->email}}
                </li>
                <li class="list-group-item">
                  <b>Facebook  : </b>
                    {{$localizacao->contacto->facebook}}
                  
                </li>
              
                <li class="list-group-item">
                  <b>Whatsap : </b>
                  {{$localizacao->contacto->whatsao}}
                 
                  
                </li>
                @endif
                
                  </div>
              </ul>
               
                 
            </div>
            <div class="tab-pane" id="tab_3" >
               
               <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                     <th >#</th>
                     <th >Nome</th>
                     <th >Descrição</th>
                     <th style="text-align: center;">Operação</th>
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


@endsection


@section('javascript')


   

   

@endsection