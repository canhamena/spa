<?php


namespace App\Http\Helpers;


use App\Notifications\UserActivity;
use App\User;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AppHelper
{
    const UPLOAD_FOLDER_SERVICO = 'servico';
    const UPLOAD_FOLDER_TIPOSERVICO = 'tiposervico';
    const UPLOAD_FOLDER_SPA = 'spa';


     public static function converteParaReal($parametro) {
        $tmp = str_replace('.', '', $parametro);
        $valor = (double) (str_replace(',', '.', $tmp));
        return $valor;
    }

     public static function geraNumeroLocalizacao($ultimo){
        $ticket = "";
        $tamano = strlen(intval($ultimo));

        switch ($tamano) {
            case 1:
                $ticket = "0000" . ($ultimo + 1);
                break;
            case 2:
                $ticket = "000" . ($ultimo + 1);
                break;
            case 3:
                $ticket = "00" . ($ultimo + 1);
                break;
            case 4:
                $ticket = "0" . ($ultimo + 1);
                break;
            default: $ticket = $ticket . ($ultimo + 1);
                break;
        }

          return 'L'.$ticket;
    }

      public static function geraNumeroPagamento($ultimo){
        $ticket = "";
        $tamano = strlen(intval($ultimo));

        switch ($tamano) {
            case 1:
                $ticket = "0000" . ($ultimo + 1);
                break;
            case 2:
                $ticket = "000" . ($ultimo + 1);
                break;
            case 3:
                $ticket = "00" . ($ultimo + 1);
                break;
            case 4:
                $ticket = "0" . ($ultimo + 1);
                break;
            default: $ticket = $ticket . ($ultimo + 1);
                break;
        }

          return 'P'.$ticket;
    }

     public static function convertedmY2Ymd($date){
        return Carbon::createFromFormat('d/m/Y', $date);
    }
    

}
