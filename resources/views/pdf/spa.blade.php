@extends('pdf.include.layout_horizontal')


@section('titulo')
    Muxima - Gestão de Spa 
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
    <table class="geral principal">
        <tr class="cabeca">
            <td colspan="4"  style="text-align: center;">POSTO</td> 
        </tr>
    
        <tr class="cabeca">
            <td width="">Nº</td>
            <td width="" >Provincia</td>
            <td width="" >Município</td>
            <td width="" >Rua</td>
        </tr>
        
            @foreach($spa->endereco as $endereco)
            <tr class="">
                <td> {{  $endereco->codigo }}</td>
                <td> {{$endereco->municipio->provincia->nome}}</td>
                <td> {{$endereco->municipio->nome}} </td>
                <td> {{$endereco->rua}} </td>
            </tr>
            @endforeach
    </table>
    <br><br>

    <table class="geral principal">
        <tr class="cabeca">
            <td colspan="4" style="text-align: center;">CONTACTOS</td> 
        </tr>
        <tr class="cabeca">
            <td width="">Nº</td>
            <td  >Telefone</td>
            <td  >Telemovel</td>
            <td  >E-mail</td>
        </tr>
        @foreach($contactos as $contacto)
            <tr>
                <td>{{  $loop->index +1 }} </td>
                <td>{{$contacto->telefone}}</td>
                <td>{{$contacto->telemovel}}</td>
                <td>{{$contacto->email}}</td>
            </tr>
        @endforeach
    </table>

    <br><br>
    <table class="geral principal">
        <tr class="cabeca">
            <td colspan="3" style="text-align: center;">SERVIÇOS</td> 
        </tr>
        <tr class="cabeca">
            <td  style="text-align: left;" width="10" colspan="">Nº</td>
            <td width="100" style="text-align: left;">Nome</td>
            <td style="text-align: left;" width="200">Descrição</td>
           
        </tr>
        @foreach($spa->tiposervico as $servico)
            <tr>
                <td>{{  $loop->index +1 }}</td>
                <td >{{$servico->nome}}</td>
                <td>{{$servico->descricao}}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('footer')
@endsection