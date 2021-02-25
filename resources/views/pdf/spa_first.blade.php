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
            border-collapse: separate;
            border-spacing: 0px 5px;
            width: 100%;/*1500px*/
        }
    .cabeca {
        background-color: #787878;
        color: black;
        }
    
    .geral{
        border-collapse:collapse;
    }
    .title{
        font-weight:bold;
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

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 30px; "><u>Relatório - SPA</u></h2>


    <table class="principal" >
        <tr >
            <td style="text-align: left; font-weight:bold; background-color: #787878;">Nome</td> 
            <td style="text-align: left;"> {{$spa->nome}} </td>
            <td style="text-align: left; font-weight:bold; width:30px; background-color: #787878;">Tipo</td>
            <td style="text-align: left;">
                @foreach($spa->tipospa as $tipospa)
                    {{$tipospa->tipo.' , '}}
                @endforeach
            </td>
        </tr>
        
        <tr>
            <td  style="text-align: left; font-weight:bold; width:20px; background-color: #787878;">Descrição</td>
            <td style="text-align: left;" colspan="3">
                {{$spa->descricao}}
            </td>
        </tr>
    </table>
    <br><br>
    <table class="geral princiapl" style="width: 100%">
        <tr class="cabeca">
            <td colspan="4"  style="text-align: center; font-weight:bold;">POSTO</td> 
        </tr>
    
        <tr class="cabeca">
            <td  style="text-align: left; width:10px; font-weight:bold;" >Posto</td>
            <td width="100" style="text-align: left; font-weight:bold;">Provincia</td>
            <td style="text-align: left; width:150px; font-weight:bold;" >Município</td>
            <td width="200" style="text-align: left; font-weight:bold;">Rua</td>
        </tr>
        
            <tr class="principal">
                <td> {{ $localizacao->codigo }}</td>
                <td> {{ $localizacao->municipio->provincia->nome }}</td>
                <td> {{ $localizacao->municipio->nome }} </td>
                <td> {{ $localizacao->rua }} </td>
            </tr>
        
        
    </table>
    <br><br>
    <table class="geral principal" >
        <tr class="cabeca">
            <td colspan="3" style="text-align: center; font-weight:bold;">CONTACTOS</td> 
        </tr>
       <tr class="title">
           <td>Telefone</td>
           <td>Telemovel</td>
           <td>Email</td>
       </tr>
        <tr>
            <td>{{$contactos->telefone}}</td>
            <td>{{$contactos->telemovel}}</td>
            <td>{{$contactos->email}}</td>
        </tr>
        
    </table>
    <br><br>
    <table class="geral principal">
        <tr class="cabeca">
            <td colspan="3" style="text-align: center; font-weight:bold;">SERVIÇOS</td> 
        </tr>
        <tr class="cabeca">
            <td  style="text-align: left; font-weight:bold;" width="10" colspan="">Nº</td>
            <td width="50" style="text-align: left; font-weight:bold;">Nome</td>
            <td style="text-align: left; font-weight:bold;" width="200">Descrição</td>
        </tr>
        @foreach($spa->tiposervico as $servico)
            <tr>
                <td>{{ $loop->index +1 }}</td>
                <td>{{$servico->nome}}</td>
                <td>{{$servico->descricao}}</td>
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