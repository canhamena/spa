
    <div class="row">
        <div class="col-xs-12">


            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-users"></i> Utilizadores</h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus-circle"></i> Adicionar
                         </button>
                        <a class="btn btn-default btn-sm" href="#" target="_blank"><i class="fa fa-print"></i> Imprimir</a>
                    </div>
                </div>

<div class="box-body">
    @include('livewire.user.create')
    @include('livewire.user.update')
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
                <th>E-mail</th>
                <th>Perfil</th>
                <th>Data de registo</th>
                <th>Data última actualização</th>
                <th style="text-align:center;">Estado</th>
                <th style="text-align: center;">Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($v_users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role->description }}</td>
                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</td>
                <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</td>
                <td style="text-align:center;">
                    @if($user->status==1)
                        <small class="label  bg-green">Activo</small>
                    @else
                        <small class="label  bg-red">Inactivo</small>
                    @endif
                </td>

                <td style="text-align: center;">
                    @if($user->status==1)
                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $user->id }})" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>
                        <button wire:click="restorePassword({{ $user->id }})" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i></button>

                        @if(Auth::user()->id != $user->id )
                        <button wire:click="disableUser({{ $user->id }})" class="btn btn-danger btn-sm"><i class="fa fa-user-times"></i></button>
                        @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        {{ $v_users->links()}}
            </div>
        </div>
    </div>
</div>
