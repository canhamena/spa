@extends('layouts.platform')

@section('title', 'Lojas')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Gestão de assiduidade')

@section('icone','fa fa-th')
@section('module','Loja')
@section('subtitle','Lista')



@section('content')


@if (session()->has('message'))
    {{--<div class="alert alert-success">
        {{ session('message') }}
    </div>--}}
@endif
@livewire('lojas')


  @endsection

@section('javascript')


    <script type="text/javascript">
        window.livewire.on('lojaStore', () => {
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

<script>
    $(function () {

        $('#example3').DataTable({
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', text: 'Copiar' },
            { extend: 'excel', text: 'Excel' },


        ]
    })

    });


</script>

@endsection
