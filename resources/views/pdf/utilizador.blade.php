@extends('pdf.include.layout_horizontal')


@section('titulo')
    Muxima - SPA
@endsection

@section('content')

    <h2  style="text-align: center; margin-top: 50px;  margin-bottom: 50px; "><u>Utilizadores</u></h2>

    <table class="principal">
        <tr class="cabeca">
            <td  style="text-align: left;" width="40">Nº</td>
            <td width="" style="text-align: left;">Nome</td>
            <td style="text-align: left;" width="200">Email</td>
            <td width="200" style="text-align: left;">Função</td>
            <td width="50" style="text-align: left;">Posto</td>
            <td width="100" style="text-align: left;">Estado</td>
        </tr>

        @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td style="text-align: left;">{{ $user->name }}</td>
                        <td style="text-align: left;">{{ $user->email }}</td>
                        <td style="text-align: left;">
                            @if(isset($user->role))
                            {{ $user->role->description }}
                            @endif
                        </td>
                        <td style="text-align: right;">
                            @if(isset($user->posto)) 
                            {{ $user->posto->codigo}}
                            @endif
                        </td>
                    
                        <td style="text-align:left;">
                        
                            @if($user->status==1)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                    </tr>
        @endforeach 
    </table>

@endsection

@section('footer')
@endsection