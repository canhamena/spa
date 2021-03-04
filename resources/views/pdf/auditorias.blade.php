@extends('pdf.include.layout_horizontal')


@section('titulo')
    Muxima - Gestão de Spa
@endsection

@section('content')

<h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u> {{ $dizer }} </u></h2>

 
<table class="principal">
        
        <tr class="cabeca">
            <td  style="text-align: left; font-weight:bold" width="40">Nº</td>
            <td width="" style="text-align: left; font-weight:bold">Utilizador</td>
            <td style="text-align: left; font-weight:bold" width="200">Perfil</td>
            <td width="200" style="text-align: left; font-weight:bold">Posto</td>
            <td width="200" style="text-align: left; font-weight:bold">Acção</td>
            <td width="200" style="text-align: left; font-weight:bold">Data</td>
        </tr>

        @foreach($dados as $auditoria) 
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td style="text-align: left;">
                        @if(isset($auditoria->user))
                            {{$auditoria->user->name}}
                        @else
                            {{$auditoria->name}}
                        @endif
                    </td>  
                    <td style="text-align: left;">
                        @if(isset($auditoria->user->role))
                              {{$auditoria->user->role->description}}
                        @else
                            {{ $auditoria->description }}
                        @endif
                    </td>
                    <td style="text-align: left;"> 
                        @if(isset($auditoria->posto))
                            {{$auditoria->posto->codigo}}
                        @else
                        Geral
                        @endif
                    </td>
                    <td>{{$auditoria->accao}}</td>
                    <td>
                        {{date('d-m-Y H:s:m',strtotime($auditoria->created_at))}}</td>
                    </tr>
                </tr>

        @endforeach 
  </table>

@endsection


@section('footer')
@endsection