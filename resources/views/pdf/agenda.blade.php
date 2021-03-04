@extends('pdf.include.layout_horizontal')


@section('titulo')
    Muxima - Gestão de Spa
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Relatório de Agendamento</u></h2>

<table class="principal">
      <tr class="cabeca">
      	  <td  style="text-align: left;" width="10">Nº</td>
          <td width="50" style="text-align: left;">Tipo de Serviço</td>
          <td style="text-align: left;" width="10">Data de Inicio</td>
          <td width="5" style="text-align: left;">Data de Fim</td>
          <td width="5" style="text-align: left;">Hora de Inicio</td> 
          <td width="5" style="text-align: left;">Hora de Fim</td>  
      </tr>


    @foreach($agendas as $agenda)
        @if(isset($agenda->tiposervico)) 
            @foreach($agenda->tiposervico as $tiposervico)
                <tr>
                    <td>{{  $loop->iteration }}</td>
                        <td>
                            {{ $tiposervico->nome }}     
                        </td>
                        <td style="text-align: left;">{{ $agenda->data_inicio }}</td>
                        <td style="text-align: left;">{{ $agenda->data_fim }}</td>
                        <td style="text-align: left;">{{ $agenda->atendimento_inicio }}</td>
                        <td style="text-align: left;">{{ $agenda->atendimento_fim }}</td>
                    
                </tr>
            @endforeach
        @endif
    @endforeach

  </table>

@endsection


@section('footer')
@endsection