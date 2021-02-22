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
        }
        .principal {
            font-size: large;
            text-align: center;
            border-collapse: collapse;
            width: 100%;/*1500px*/
            border: 0px;
        }
    .cabeca {
        font-size:large;
        background-color: #787878;
        color: black;
        text-align: center;
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

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>UTILIZADORES</u></h2>

    
    <table class="principal">
        <tr class="cabeca">
            <td colspan="4">Dados de Utilizador</td>
        </tr>
        <tr class="cabeca">
            <td  style="text-align: left;" width="40">Nº</td>
            <td width="" style="text-align: left;">Nome</td>
            <td style="text-align: left;" width="200">Descrição</td>
            <td width="200" style="text-align: left;">Tipo de serviço (Quantidade)</td>
            
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