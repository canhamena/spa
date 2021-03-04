@extends('pdf.include.layout_horizontal')

@section('titulo')
    Muxima - Gestão de Spa    
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u> {{ $dizer }} </u></h2>

    <table class="principal">
        
        <tr class="cabeca">
            <td  style="text-align: left;" width="40">Nº</td>
            <td width="" style="text-align: left;">Cliente</td>
            <td style="text-align: left;" width="100">Telefone</td>
            <td width="200" style="text-align: left;">Email</td>
            <td width="100" style="text-align: left;">Data de Marcação</td>
            <td width="100" style="text-align: left;">Data de atendimento</td>
            <td width="100" style="text-align: left;">Estado</td>
        </tr>

        @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td style="text-align: left;">{{ $reserva->nome }}</td>
                        <td style="text-align: right;">{{ $reserva->telefone }}</td>
                        <td style="text-align: left;">
                            {{ $reserva->email }} 
                        </td>
                        <td style="text-align: right;">
                            {{date('d-m-Y',strtotime($reserva->created_at)) ?? ''}}
                        </td>
                    
                        <td style="text-align:right;">
                            {{date('d-m-Y',strtotime($reserva->data_atendimento)) ?? ''}}
                        </td>
                        <td style="text-align: left;">
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

@endsection

@section('footer')
@endsection