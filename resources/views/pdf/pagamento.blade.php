@extends('pdf.include.layout_horizontal')


@section('titulo')
    Muxima - Gestão de Spa 
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Pagamentos</u></h2>

    <table class="principal">
        <tr class="cabeca">
            <td  style="text-align: left; font-weight:bold;" width="20">Nº</td>
            <td width="20" style="text-align: left; font-weight:bold;">Numero da factura</td>
            <td style="text-align: left; font-weight:bold;" width="200">Nome do cliente</td>
            <td width="200" style="text-align: left; font-weight:bold;">Utilizador</td>
            <td width="100" style="text-align: left; font-weight:bold;">Total pago</td> 
        </tr>

        @foreach($pagamentos as $pagamento)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td style="text-align: left;">{{$pagamento->numero_pagamento}}</td>
                <td style="text-align: left;">{{$pagamento->nome_cliente}}</td> 
                <td style="text-align: left;">
                    {{Auth::user()->name}}
                </td>
                @php
                    $total = 0;
                    foreach($pagamento->tiposervicopagamento as $pago){
                        $total += $pago->tiposervico->preco*$pago->qtd;
                    }
                @endphp
                <td style="text-align: right;">
                    {{number_format($total,2,',','.').' AOA'}}
                </td>
            </tr>
            @endforeach 
    </table>

@endsection

@section('footer')
@endsection