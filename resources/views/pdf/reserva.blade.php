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

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>RESERVAS</u></h2>


<table class="principal">
      <tr class="cabeca">
      	  <td  style="text-align: left;" width="40">Nº</td>
          <td width="" style="text-align: left;">Cliente</td>
          <td style="text-align: left;" width="200">Telefone</td>
          <td width="200" style="text-align: left;">Email</td>
          <td width="100" style="text-align: left;">Data de Marcação</td>
          <td width="150" style="text-align: left;">Data de atendimento</td>
          <td width="150" style="text-align: left;">Estado</td>
      </tr>

               @foreach($reservas as $reserva)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: left;">{{ $reserva->cliente->nome }}</td>
                            <td style="text-align: left;">{{ $reserva->cliente->telefone }}</td>
                            <td style="text-align: left;">
                            	{{ $reserva->cliente->email }} 
                            </td>
                            <td >
                                {{date('d-m-Y',strtotime($reserva->created_at)) ?? ''}}
                            </td>
                           
                            <td style="text-align:center;">
                                {{date('d-m-Y',strtotime($reserva->data_atendimento)) ?? ''}}
                            </td>
                            <td>
                                @if ($reserva->estado == 'M')
                                   <span> Pendente </span>  
                                @elseif($reserva->estado == 'A')
                                    <span> Atendido </span>
                                @elseif($reserva->estado == 'C')
                                    <span> Cancelado </span>
                                @endif
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