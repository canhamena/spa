@extends('layouts.platform')

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

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>UTILIZADORES</u></h2>


<table class="principal">
      <tr class="cabeca">
          <td width="115" style="text-align: left;">Referência do imóvel</td>
          <td style="text-align: left;">Beneficiário</td>
          <td width="90" style="text-align: left;">Nº de prestação</td>
          <td width="100" style="text-align: left;">Prestações pagas</td>
          <td width="150" style="text-align: left;">Valor do imóvel</td>
          <td width="150" style="text-align: left;">Prestação</td>
          <td width="150" style="text-align: left;">Total pago</td>
          <td width="70"style="text-align: left;">Estado</td>
      </tr>


      	
     
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