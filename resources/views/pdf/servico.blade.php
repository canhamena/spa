@extends('pdf.include.layout_vertical')

@section('titulo')
    Muxima - Gestão de Spa
@endsection

@section('content')

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Serviços</u></h2>

    <table class="principal">
        <tr class="cabeca">
            <td  style="text-align: left;" width="10">Nº</td>
            <td width="50" style="text-align: left;">Nome</td>
            <td style="text-align: left;" width="200">Descrição</td>
            <td width="5" style="text-align: right;">Tipo de serviço (Quantidade)</td>
            
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
@endsection


@section('footer')
@endsection