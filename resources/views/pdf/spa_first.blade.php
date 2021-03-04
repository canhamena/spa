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

@endsection

@section('footer')
@endsection