@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')


@section('content')
     <div class="row">
   <div class="col-md-4">
              
          <div class="box box-default" id="a">
            <div class="box-body box-profile" id="b">
              
              <img class="profile-user-img img-responsive " src="" style="width: 100%; height: 270px; " >

              <ul class="list-group list-group-unbordered" >
                <div class="box-body">
                 <li class="list-group-item active" style="opacity:0.6;"><b> &nbsp;&nbsp;Informação geral da reserva</b>
                    
                    </li>
                  
                <li class="list-group-item">
                  <b>Cliente :  </b>
                  @if($marcacao->cliente)
                       {{$marcacao->cliente->nome}}
                  @endif 
                  
                </li>
                <li class="list-group-item">
                  <b>Telefone : </b> 
                    @if($marcacao->cliente)
                       {{$marcacao->cliente->telefone}}
                  @endif 
                </li>
                
                
                 <li class="list-group-item">
                  <b>E-mail : </b> 
                  @if($marcacao->cliente)
                       {{$marcacao->cliente->email}}
                  @endif 
                </li>
                <li class="list-group-item">
                  <b>Estado : </b> 
                   @if($marcacao->estado == "C")
                       Cancelado
                  @elseif($marcacao->estado == "A")
                        Atendido
                  @elseif($marcacao->estado == "M")
                       Pendente
                  @endif
                 </li>
                <li class="list-group-item">
                  <b>Data da marcação : </b> 
                  {{date('d-m-Y',strtotime($marcacao->created_at)) ?? ''}}
                
                </li>
                <li class="list-group-item">
                  <b>Data de atendimento : </b> 
                    {{date('d-m-Y',strtotime($marcacao->data_atendimento)) ?? ''}}
                </li>
                @php
                $total = 0;
                foreach($marcacao->marcacaoservico as $tipo){
                  if(isset($tipo->tiposervico)){
                      $total += $tipo->tiposervico->preco*$tipo->quantidade;
                  }

                }
                @endphp
                 

                 <li class="list-group-item">
                  <b>Total a pagar  : </b> 
                   {{number_format($total,2,',','.').' AOA'}}
                </li>
                
                  </div>
              </ul>

           <div style="text-align: center;"> 
                <a href="{{ URL::previous() }}" class="btn btn-default btn-sm"><b><i class="fa fa-arrow-left"></i> Voltar</b></a>
                 <a href="{{ url("pagamento/".base64_encode($marcacao->id)."/pagamento_marcacao")}}" class="btn btn-success btn-sm" ><i class="fa fa-money"></i> Pagamento</a>
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
            <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-black-tie"></i> Tipos de serviços</a></li>
            
           
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
                <table  id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Tipo de serviço</th>
                     <th >Descrição</th>
                     <th >Quantidade</th>
                     <th >Preço uni.</th>
                     <th >Total</th>
                    <th style="text-align: center;">Operações</th>
                    </tr>
                    </thead>
                    <tbody>
                  @foreach($marcacao->marcacaoservico as $tipo)
                      <tr>
                        <td>

                        AAA
                      </td>
                        <td> 
                          @if(isset($tipo->tiposervico))
                          {{$tipo->tiposervico->nome}}
                          @endif
                        </td>
                        <td> 
                          @if(isset($tipo->tiposervico))
                          {{$tipo->tiposervico->descricao}}
                          @endif
                        </td>
                      
                       <td>{{$tipo->quantidade}}</td>
                  

                   
                      <td style="text-align: right;"> 
                          @if(isset($tipo->tiposervico))
                          {{number_format($tipo->tiposervico->preco,2,',','.').' AOA'}}
                           
                          @endif
                      </td>
                      <td style="text-align: right;">
                       {{number_format($tipo->tiposervico->preco*$tipo->quantidade,2,',','.').' AOA'}}
                      </td>
                      
                      
                     
                      <td>
                     <div class="btn-group" style="">
                        <a title="Visualizar" href=""  class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                        </a>
                    </div>
                      
                    </td>
                    </tr>
                   @endforeach
                    

                   </tbody>
                </table>
            </div>
            
            
            


          </div>

        </div>

      </div>

@endsection


@section('javascript')


   

   

@endsection

