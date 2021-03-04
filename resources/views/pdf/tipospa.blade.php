@extends('pdf.include.layout_vertical')



@section('titulo')
    Muxima - Gestão de Spa
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Tipos de Spa</u></h2>

    <table class="principal">
        <tr class="cabeca">
            <td  style="text-align: left; " width="40">Nº</td>
            <td width="300" style="text-align: left; ">Nome</td>
            <td style="text-align: left; " width="">Descrição</td>
            
        </tr>

        @foreach($tipospa as $tipospa) 
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td style="text-align: left;">{{ $tipospa->tipo }}</td>
                        <td style="text-align: left;">{{ $tipospa->descricao }}</td>
                    </tr>
        @endforeach 
    </table>

@endsection

@section('footer')
@endsection