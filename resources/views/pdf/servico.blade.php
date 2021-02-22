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
      background: #850e10;
      color: white;
      text-align: center;
    }
</style>

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>SERVIÇOS</u></h2>

 
<table class="principal">
      <tr class="cabeca">
      	  <td  style="text-align: left;" width="40">Nº</td>
          <td width="" style="text-align: left;">Nome</td>
          <td style="text-align: left;" width="200">Descrição</td>
          <td width="200" style="text-align: left;">Tipo de serviço (Quantidade)</td>
          
      </tr>

               @foreach($servicos as $servico) 
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: left;">{{ $servico->nome }}</td>
                            <td style="text-align: left;">{{ $servico->descricao }}</td>
                            <td style="text-align: left;">
                            	{{count($servico->tiposervico)}} 
                            </td>
                            
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