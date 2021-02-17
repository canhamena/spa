@extends('layouts.platform')

@section('title', 'Utilizador')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Portal')

@section('icone','fa fa-users')
@section('module','Utilizador')
@section('subtitle','Lista')



@section('content')
    @livewire('users')
@endsection


@section('javascript')

    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });

        window.setTimeout(function(){
            $(".alert-success").fadeTo(1000,0).slideUp(1000, function(){
                $(this).remove();
            });
                    }, 3000);
        window.setTimeout(function(){
	        $(".alert-warning").fadeTo(1000,0).slideUp(1000, function(){
		 $(this).remove();
	         });
        }, 3000);
    </script>
@endsection
