<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Role;
use App\Models\Auditoria;
use App\Models\Localizacao;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class Users extends Component
{

    use WithPagination;
    public $users, $name, $email, $password, $role_id, $user_id,$localizacao_id;
    public $updateMode = false;
    public function render() 
    {
        if (Auth()->user()->role->id == 1) {
             $users = User::all();
             $roles = Role::all();
             $postos = Localizacao::OrderBy('id','desc')->get();
        }elseif(Auth()->user()->role->id == 2)
        {   $roles = Role::Where('id','!=',1)->get();
            $users = User::where('localizacao_id',Auth()->user()->posto->id)->get();
            $postos = Localizacao::where('id',Auth()->user()->posto->id)->get();
        }

        return view('livewire.users',[
            'v_users' => $users,
            'roles' =>$roles,
            'postos' => $postos,
        ]);
    }


    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role_id ='';
        $this->localizacao_id = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'role_id' => 'required',
            'name' => 'required|unique:App\Models\User,name',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'nullable',
            'localizacao_id' => 'required'
        ]);

        User::create(['role_id' =>$this->role_id,
                      'name' => $this->name,
                      'email' => $this->email,
                      'password' => Hash::make('12345678'),
                      'localizacao_id' => $this->localizacao_id,
                      'status'=>1
                    ]);
                    $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                   Auditoria::create(['accao' =>" Registou Utilizador  ".$this->name,'user_id'=>auth()->user()->id,'localizacao_id' =>$posto]);
        session()->flash('message', '<i class="fa fa-check-circle"></i> Utilizador criado!.');

        $this->resetInputFields();

        $this->emit('userStore'); // Close model to using to jquery

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->user_id = $id;

        $this->role_id = $user->role_id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
        $this->localizacao_id = '';

        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'role_id'=>'required',
            'name' => 'required|unique:users,name,'.$this->user_id,
            'email' => 'required|email|max:255|unique:users,email,'.$this->user_id,
            'password' => 'nullable',
            'localizacao_id' => 'required'
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'role_id' => $this->role_id,
                'name' => $this->name,
                'password' => $user->password,
                'email' => $this->email,
                'localizacao_id' => $this->localizacao_id,
                'status'=>1
            ]);
            $this->updateMode = false;
            $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                   Auditoria::create(['accao' =>" Actulizou Utilizador  ".$this->name,'user_id'=>auth()->user()->id,'localizacao_id' =>$posto]);
            session()->flash('message', '<i class="fa fa-check-circle"></i> Utilizador actualizado!.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        $utilizador = User::where('id',$id)->get()->first();
        if(isset($utilizador)){
            
            $nome = $utilizador->nme;
            $utilizador->delete();
            $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                   Auditoria::create(['accao' =>" Registou Utilizador  ".$nome,'user_id'=>auth()->user()->id,'localizacao_id' =>$posto]);
            session()->flash('message', 'Utilizador eliminado!.');
        }
    }

    public function restorePassword($id)
    {
        if($id){
            $user = User::find($id);
            $user->update([
                'password' => Hash::make('12345678'),
            ]);


            session()->flash('message', '<i class="fa fa-check-circle"></i> Palavra-passe restaurada!.');
        }
    }

    public function disableUser($id)
    {
        $user = User::find($id);
        if($user){
            
            $user->update([
                'status' => 0,
            ]);
             $posto = isset(auth()->user()->posto) ? auth()->user()->posto->id : null;
                   Auditoria::create(['accao' =>" Desabilitou Utilizador  ".$user->name,'user_id'=>auth()->user()->id,'localizacao_id' =>$posto]);
            session()->flash('message', '<i class="fa fa-check-circle"></i> Utilizador inactivado!.');
        }
    }

    public function limpaCampos(){
        $this->resetInputFields();
    }

}
