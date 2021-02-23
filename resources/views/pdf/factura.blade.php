@extends('pdf.include.layout')


@section('css_style')
    <style type="text/css">
        @page {margin: 100px 25px;}
    
        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            /** Extra personal styles **/
            color: black;
            text-align: center;
            line-height: 35px;
        }
        /*
        main{
            margin-top: 30%;
        }*/

        footer {
            position: fixed; 
            bottom: -80px; 
            left: 0px; 
            right: 0px;
            height: 50px; 

            /** Extra personal styles **/ 
            color: black;
            text-align: center;
            line-height: 35px;
            margin-bottom: 10px;
        }

        td {
            /*border: 2px solid black;*/

            padding: 12px;/*5px*/
            font-size: larger;
            color: black;
        }
        .principal {
            font-size: large;
            text-align: center;
            border: 0px;
            width: 100%;/*1500px*/
        
        }
    .cabeca {
        font-size:large;
        color: black;
        text-align: center;
        }
    
    .geral{
        border-collapse:collapse;
    }
    </style>
@endsection

@section('header')
    <header>
        
        Muxima - SPA
        
    </header>
@endsection

@section('content')
    <main>
       
        <table class="principal">
            <tr>
                <td width="150" style="text-align: left;  font-weight:bold;">Factura:</td>
                <td style="text-align: left;">
                    {{$pagamento->numero_pagamento}}
                </td>
                <td width="100" style="text-align: left;  font-weight:bold;">Data:</td>
                <td style="text-align: left;">
                    {{$pagamento->created_at->format('M-d-Y')}}
                </td>
            </tr> 
            <tr>
                <td width="150" style="text-align: left;  font-weight:bold;">Cliente:</td>
                <td style="text-align: left;">
                    {{$pagamento->nome_cliente}}
                </td>
                <td width="100" style="text-align: left;  font-weight:bold;">Hora:</td>
                <td style="text-align: left;">
                    {{$pagamento->created_at->format('H:i:s')}}
                </td>
            </tr>
            <tr>
                <td width="100" style="text-align: left;  font-weight:bold;">Tipo de Pagamento:</td>
                <td style="text-align: left;">
                    @if ($pagamento->tipopagamento)
                    {{$pagamento->tipopagamento->tipo}}
                    @endif
                </td>
            </tr> 
            
        </table>
        <br><br><br>
        <hr>
        <table class="principal">
            <tr class="cabeca">
                <td width="10" style="text-align: left; font-weight:bold;">Quantidade</td>
                <td width="40" style="text-align: left; font-weight:bold;">X</td>
                <td width="40" style="text-align: left; font-weight:bold;">Preco Unitário</td>
                <td style="text-align: left; font-weight:bold;" width="40">Tipo de serviço</td>
                <td width="40" style="text-align: left; font-weight:bold;">Total</td>
                
            </tr>
        
            @foreach($pagamento->tiposervicopagamento as $servicospago)
                <tr>
                    <td style="text-align: left;">{{$servicospago->qtd}}</td>
                    <td style="text-align: left;"></td>
                    <td style="text-align: left;">{{number_format($servicospago->tiposervico->preco,2,',','.').' AOA'}}</td> 
                    <td style="text-align: left;">
                        {{$servicospago->tiposervico->nome}}
                    </td>
                    <td style="text-align: left;">
                        {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                    </td>
                </tr>
            @endforeach 
        </table>
        <hr>
        <br><br>
        <table class="principal">
            <tr>
                <td ></td><td ></td>
                <td  style="text-align: left;  font-weight:bold;">Total Liquido:</td>
                <td style="text-align: left; ">
                    {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                </td>
            </tr>
            <tr>
                <td width="640">  </td><td></td>
                <td style="text-align: left;  font-weight:bold;">Total Pago:</td>
                <td style="text-align: left;">
                    {{number_format($servicospago->tiposervico->preco*$servicospago->qtd,2,',','.').' AOA'}}
                </td>
            </tr>
        </table>
        <hr>
    </main>


    <script type="text/php">
        if ( isset($pdf) ) {

            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 60;
            $y = $pdf->get_height() - 70;
            $x = $pdf->get_width() - 15 - $fontMetrics->get_text_width("1/1", $font, $size);
            $pdf->page_text($x, $y, "Página: {PAGE_NUM} de {PAGE_COUNT}", $font, 10,  array(0,0,0));  
        } 
    </script>
@endsection

@section('footer')
    
    <footer>

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