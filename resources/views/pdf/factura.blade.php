@extends('pdf.include.layout_vertical')


@section('titulo')
    Muxima - SPA
@endsection

@section('content')

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 30px; "><u>Dados da factura</u></h2>
    <main>
       
        <table class="principal" >
            <tr>
                <td width="150" style="text-align: left;  font-weight:bold; border:none;">Factura:</td>
                <td style="text-align: left; border:none;" width="100">
                    {{$pagamento->numero_pagamento}}
                </td>
                <td width="100" style="text-align: left;  font-weight:bold; border:none;">Data:</td>
                <td style="text-align: left; border:none;">
                    {{$pagamento->created_at->format('M-d-Y')}}
                </td>
            </tr> 
            <tr>
                <td width="150" style="text-align: left;  font-weight:bold; border:none;">Cliente:</td>
                <td style="text-align: left; border:none;">
                    {{$pagamento->nome_cliente}}
                </td>
                <td width="100" style="text-align: left;  font-weight:bold; border:none;">Hora:</td>
                <td style="text-align: left; border:none;">
                    {{$pagamento->created_at->format('H:i:s')}}
                </td>
            </tr>
            <tr>
                <td width="100" style="text-align: left;  font-weight:bold; border:none;">Tipo de Pagamento:</td>
                <td style="text-align: left; border:none;">
                    @if ($pagamento->tipopagamento)
                    {{$pagamento->tipopagamento->tipo}}
                    @endif
                </td>
            </tr> 
            
        </table>
        <br><br><br>

        <table class="principal">
            <tr class="cabeca">
                <td  >Quantidade</td>
                <td  >X</td>
                <td  >Preco Unitário</td>
                <td>Tipo de serviço</td>
                <td  >Total</td> 
            </tr>
        
            @foreach($pagamento->tiposervicopagamento as $servicospago)
                <tr>
                    <td >{{$servicospago->qtd}}</td>
                    <td ></td>
                    <td style="text-align: right;">{{number_format($servicospago->tiposervico->preco,2,',','.').' AOA'}}</td> 
                    <td >
                        {{$servicospago->tiposervico->nome}}
                    </td>
                    <td style="text-align: right;">
                        {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                    </td>
                </tr>
            @endforeach 
        </table>

        <br><br>
        <table class="principal">

            
            <tr>
                <td style="border:none;"></td><td style="border:none;"></td>
                <td  style="text-align: left;  font-weight:bold; border:none;">Total Liquido:</td>
                <td style="text-align: left; border:none;">
                    {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                </td>
            </tr>
            <tr>
                <td width="300" style="border:none;">  </td><td style="border:none;"></td>
                <td style="text-align: left;  font-weight:bold; border:none;">Total Pago:</td>
                <td style="text-align: left; border:none;">
                    {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                </td>
            </tr>


        </table>
        <hr>
    </main>

@endsection

@section('footer')
@endsection