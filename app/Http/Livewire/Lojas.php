<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Loja;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Lojas extends Component
{

    use WithPagination;
    public $lojas, $nome, $descricao, $endereco, $loja_id;
    public $updateMode = false;


    public function render()
    {

        return view('livewire.lojas',[
            'v_lojas' =>  Loja::paginate(10),
        ]);

    }

    private function resetInputFields(){
        $this->nome = '';
        $this->descricao = '';
        $this->endereco = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nome' => 'required|unique:App\Models\Loja,nome',
            'endereco' => 'required',
            'descricao' => 'required'
        ]);

        Loja::create($validatedDate);

        session()->flash('message', '<i class="fa fa-check-circle"></i> Loja criada!.');

        $this->resetInputFields();

        $this->emit('lojaStore'); // Close model to using to jquery

    }

    public function edit($id)
    {  
        $loja = Loja::findOrFail($id);

        $this->loja_id = $id;
        $this->nome = $loja->nome;
        $this->endereco = $loja->endereco;
        $this->descricao = $loja->descricao;

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
            'nome' => 'required|unique:lojas,nome,'.$this->loja_id,
            'endereco' => 'required',
            'descricao' => 'required'
        ]);

        if ($this->loja_id) {
            $loja = Loja::find($this->loja_id);
            $loja->update([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'descricao' => $this->descricao
            ]);
            $this->updateMode = false;
            session()->flash('message', '<i class="fa fa-check-circle"></i> Loja actualizada!.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Loja::where('id',$id)->delete();
            session()->flash('message', 'Loja eliminada!.');
        }
    }

    public function limpaCampos(){
        $this->resetInputFields();
    }
}
