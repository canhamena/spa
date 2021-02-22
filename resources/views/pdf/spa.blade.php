@extends('pdf.include.layout')

@section('content')

<style type="text/css">
	 td {
       border: 2px solid black;
       padding: 5px;
      }
    .principal {
      text-align: center;
      border-collapse: collapse;
      width: 1500px;
      }
   .cabeca {
      background: #787878;/*#850e10*/
      color: white;
      text-align: center;
    }
    .border{
      border-left: none;
    }
</style>

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 30px; "><u>RELATÓRIO SPA</u></h2>


<table class="principal">

      <tr >
      	  <td  style="text-align: left;" width="40"></td>
          <td width="" style="text-align: left;">Nome</td>
          <td style="text-align: left;" width="200">Tipo</td>
          <td width="200" style="text-align: left;">Descrição</td>
      </tr>

            
      <tr>
              <td></td>
              <td style="text-align: left;"> {{$spa->nome}} </td>
              <td style="text-align: left;">
                 	@foreach($spa->tipospa as $tipospa)
                      {{$tipospa->tipo.' , '}}
                  @endforeach
              </td>
              <td>
                {{$spa->descricao}}
            </td>
      </tr>

      <tr class="cabeca">
        <td colspan="4">ENDEREÇO</td> 
      </tr>

       <tr class="cabeca">
          <td  style="text-align: left;" width="40">Referência</td>
          <td width="" style="text-align: left;">Provincia</td>
          <td style="text-align: left;" width="200">Município</td>
          <td width="200" style="text-align: left;">Rua</td>
      </tr>
      
        @foreach($spa->endereco as $endereco)
        <tr class="principal">
          <td>{{  $endereco->codigo }}</td>
          <td>{{$endereco->municipio->provincia->nome}}</td>
          <td> {{$endereco->municipio->nome}} </td>
          <td>  {{$endereco->rua}} </td>
        </tr>
        @endforeach

      <tr class="cabeca">
        <td colspan="4">CONTACTOS</td> 
      </tr>
      <tr class="cabeca">
          <td  style="text-align: left;" width="40">Nº</td>
          <td width="" style="text-align: left;">Telefone</td>
          <td style="text-align: left;" width="200">Telemovel</td>
          <td width="200" style="text-align: left;">E-mail</td>
      </tr>
       @foreach($contactos as $contacto)
        <tr>
            <td>{{$contacto->localizacao_id}}</td>
            <td>{{$contacto->telefone}}</td>
            <td>{{$contacto->telemovel}}</td>
            <td>{{$contacto->email}}</td>
        </tr>
      @endforeach

      <tr class="cabeca">
        <td colspan="4">SERVIÇOS</td> 
      </tr>
      <tr class="cabeca">
          <td  style="text-align: left;" width="40" colspan="">Nº</td>
          <td width="" style="text-align: left;">Nome</td>
          <td style="text-align: left;" width="200">Descrição</td>
          <td style="text-align: left;" width="200" ></td>
      </tr>
      @foreach($spa->tiposervico as $servico)
        <tr>
          <td>{{  $loop->index +1 }}</td>
          <td >{{$servico->nome}}</td>
          <td class="border">{{$servico->descricao}}</td>
          <td class="border"></td>
        </tr>
      @endforeach

  
</table>


     <script type="text/php">

    if ( isset($pdf) ) {

        $font = $fontMetrics->get_font("helvetica", "bold");
       
        $pdf->page_text(1070, 800, "Página: {PAGE_NUM} de {PAGE_COUNT}", $font, 10,  array(0,0,0));  


    } 

</script>
    <footer style=" 
          width: 100%;
          position: fixed;
          bottom: 0;
          left: 0;">
       
   
  <hr>
    
  <div style="float: left; font-family: Arial Narrow, sans-serif  ">|<small> Muxima - Gestão de Spa</small> </div>
        @php
           $nome = explode(" ", Auth::user()->name);
           $cont = count($nome);
           $nome = $cont==1 ? $nome[0] : $nome[0]." ".$nome[$cont-1];
       @endphp
  <div style="margin-left:  1000px; font-family: Arial Narrow, sans-serif "><small>  Utilizador : {{$nome}} ,  &nbsp; {{date('d-m-Y')}} - Processado por compudador </small></div>

  
  
</footer> 

@endsection