
    <div class="row">
        <div class="col-xs-12">


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-th"></i> Lojas</h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus-circle"></i> Adicionar
                         </button>
                        <a class="btn btn-default btn-sm" href="{{ url('atendimento/print') }}" target="_blank"><i class="fa fa-print"></i> Imprimir</a>
                    </div>
                </div>

<div class="box-body">
    @include('livewire.loja.create')
    @include('livewire.loja.update')
    @if (session()->has('message'))
     <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {!! session('message') !!}
     </div>
    @endif



    <br>
    <table id="example" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Descrição</th>
                <th style="text-align: center;">Operação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($v_lojas as $loja)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $loja->nome }}</td>
                <td>{{ $loja->endereco }}</td>
                <td>{{ $loja->descricao }}</td>
                
                <td style="text-align: center;">
                    <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $loja->id }})" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                    <button wire:click="delete({{ $loja->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {{ $v_lojas->links()}}
            </div>
        </div>
    </div>
</div>
