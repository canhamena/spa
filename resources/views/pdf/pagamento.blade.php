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
            border: 2px solid black;
            padding: 12px;/*5px*/
            color: black;
        }
        .principal {
            text-align: center;
            border-collapse: collapse;
            border-spacing: 0px 5px;
            width: 100%;/*1500px*/
        
        }
    .cabeca {
        background-color: #787878;
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
        <hr>
            Muxima - Gestão de Spa 
        <hr>
    </header>
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>PAGAMENTOS</u></h2>


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