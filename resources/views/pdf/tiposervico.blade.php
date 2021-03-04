@extends('pdf.include.layout_horizontal')

@section('titulo')
    Muxima - Gestão de Spa
@endsection

@section('content')
    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Tipos de Serviço</u></h2>

    <table class="principal">
        
        <tr class="cabeca">
            <td  style="text-align: left; font-weight:bold;" width="40">Nº</td>
            <td width="150" style="text-align: left; font-weight:bold;">Nome</td>
            <td style="text-align: left; font-weight:bold;" width="">Descrição</td>
            <td width="130" style="text-align: left; font-weight:bold;">Preço</td>
            <td width="100" style="text-align: left; font-weight:bold;">Serviço</td>
        </tr>

        @foreach($tiposervicos as $tiposervico)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td style="text-align: left;">{{ $tiposervico->nome }}</td>
                        <td style="text-align: left;">{{ $tiposervico->descricao }}</td>
                        <td style="text-align: right;">
                            {{number_format($tiposervico->preco,2,',','.').' AOA'}}
                        </td>
                        <td >
                            {{ $tiposervico->servico->nome }}
                        </td>
                    
                    </tr>
        @endforeach 
    </table>

@endsection

@section('footer')
@endsection