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

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>UTILIZADORES</u></h2>


<table class="principal">
      <tr class="cabeca">
      	  <td  style="text-align: left;" width="40">Nº</td>
          <td width="" style="text-align: left;">Nome</td>
          <td style="text-align: left;" width="200">Email</td>
          <td width="200" style="text-align: left;">Função</td>
          <td width="100" style="text-align: left;">Posto</td>
          <td width="150" style="text-align: left;">Estado</td>
          
      </tr>

               @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align: left;">{{ $user->name }}</td>
                            <td style="text-align: left;">{{ $user->email }}</td>
                            <td style="text-align: left;">
                            	@if(isset($user->role))
                            	{{ $user->role->description }}
                            	@endif
                            </td>
                            <td >
                                @if(isset($user->posto))
                                {{ $user->posto->codigo}}
                                @endif
                            </td>
                           
                            <td style="text-align:center;">
                            
                                @if($user->status==1)
                                    Activo
                                @else
                                    Inactivo
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