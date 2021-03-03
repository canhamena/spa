<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcacao extends Model
{
    use HasFactory;

    protected $table = "marcacao";
    public $mesatendico = array();
    public $mescancelado = array();
    public $mespedente = array();

     public function cliente()
    {
        return $this->hasOne(Cliente::class,'id', 'cliente_id');
    }

     public function marcacaoservico()
    {
    	return $this->hasMany(MarcacaoTipoServico::class);
        
    }

    public function meses($ano)
    {
       return  \DB::SELECT('select distinct(Month(created_at)) as mes  from marcacao where YEAR(created_at) = ?',[$ano]);
    }
     public static function anos()
    {
       return  \DB::SELECT('select distinct(Year(created_at)) as ano  from marcacao ');
    }
    public function organizar($dados, $meses)
    {
         foreach ($meses as $mes) {
            $pedente = $cancelado = $atendido = 0;
          foreach ($dados as $dado) {
           
               if ($mes->mes == $dado->mes) {
                   if ($dado->estado == "A") {
                         $atendido++;
                   }elseif($dado->estado == "C")
                   {
                       $cancelado++;
                   }elseif($dado->estado == "M"){
                       $pedente++;
                   }
               }
               
           }
           $this->mesatendico[$mes->mes] = $atendido; 
           $this->mescancelado[$mes->mes] = $cancelado;
           $this->mespedente[$mes->mes] = $pedente;
        }


    }

    public function GraficoGeral()
    {
        $ano = date('Y');
        $meses = $this->meses($ano);
        $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ?',[$ano]);
        $this->organizar($marcacao, $meses);

    }


    public function GraficoGeralPosto($posto)
    {
        $ano = date('Y');
        $meses = $this->meses($ano);
        $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ? and localizacao_id = ? ',[$ano,$posto]);
        $this->organizar($marcacao, $meses);

    }

    public function GraficoFiltro($posto,$ano)
    {
        $ano = $ano == null ? date('Y') : $ano;
        $posto = Localizacao::where('codigo',$posto)->get()->first();
        if (empty($posto) && !isset($posto)) {
            $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ?',[$ano]);
        }else{
             
             $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ? and localizacao_id = ?',[$ano,$posto->id]); 
        }
        $meses = $this->meses($ano);
       
        $this->organizar($marcacao,$meses);

    }


      public function GraficoFiltroPosto($posto,$ano,$posto_id)
    {
        $ano = $ano == null ? date('Y') : $ano;
        $posto = Localizacao::where('codigo',$posto)->get()->first();
        if (empty($posto) && !isset($posto)) {
            $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ? and localizacao_id = ? ',[$ano,$posto_id]);
        }else{
             
             $marcacao = \DB::SELECT('select Month(created_at) as mes , estado from marcacao where Year(created_at) = ? and localizacao_id = ?',[$ano,$posto->id,$posto_id]); 
        }
        $meses = $this->meses($ano);
       
        $this->organizar($marcacao,$meses);

    }


    
}
