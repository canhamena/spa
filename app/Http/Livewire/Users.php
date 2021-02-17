<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;


class Users extends Component
{

    use WithPagination;
    public $users, $name, $email, $password, $role_id, $user_id;
    public $updateMode = false;
    public function render()
    {
        return view('livewire.users',[
            'v_users' =>  User::paginate(10),
            'roles' =>  Role::all(),
        ]);
    }


    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->role_id ='';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'role_id' => 'required',
            'name' => 'required|unique:App\Models\User,name',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'nullable'
        ]);

        User::create(['role_id' =>$this->role_id,
                      'name' => $this->name,
                      'email' => $this->email,
                      'password' => Hash::make('12345678'),
                      'status'=>1
                    ]);

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
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'role_id' => $this->role_id,
                'name' => $this->name,
                'password' => $user->password,
                'email' => $this->email,
                'status'=>1
            ]);
            $this->updateMode = false;
            session()->flash('message', '<i class="fa fa-check-circle"></i> Utilizador actualizado!.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
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
        if($id){
            $user = User::find($id);
            $user->update([
                'status' => 0,
            ]);
            session()->flash('message', '<i class="fa fa-check-circle"></i> Utilizador inactivado!.');
        }
    }

    public function limpaCampos(){
        $this->resetInputFields();
    }

}
