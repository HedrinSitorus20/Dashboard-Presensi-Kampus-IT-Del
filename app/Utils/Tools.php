<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class Tools{

    public static $SESSION_TOKEN = "itdel-token";
    public static $SESSION_TOKEN_REFRESH = "itdel-token-refresh";
    public static $SESSION_AUTH = "itdel-auth";

    public static function getAuth($request){
        return json_decode($request->session()->get(Tools::$SESSION_AUTH));
    }

    public static function setAuth($request, $data){
        $request->session()->put(Tools::$SESSION_AUTH, json_encode($data));
    }

    public static function getToken($request){
        return $request->session()->get(Tools::$SESSION_TOKEN);
    }

    public static function setToken($request, $token){
        $request->session()->put(Tools::$SESSION_TOKEN, $token);
    }

    public static function getTokenRefresh($request){
        return $request->session()->get(Tools::$SESSION_TOKEN_REFRESH);
    }

    public static function setTokenRefresh($request, $token_refresh){
        $request->session()->put(Tools::$SESSION_TOKEN_REFRESH, $token_refresh);
    }

    public static function getUserIdFromToken($token){

        $tokenData = explode(".", $token);
        if(is_array($tokenData) && sizeof($tokenData) < 3){
            return 0;
        }

        $payloadData = json_decode(base64_decode($tokenData[1]));
        if(!$payloadData || !isset($payloadData->uid)){
            return 0;
        }

        return $payloadData->uid;
    }

    public static function formatCurrencyIDR($total){
        return "Rp" . number_format($total,2,",",".");
    }

    public static function styleStatusWorkplan($status){
        $style = "badge bg-dark";
        switch ($status){
            case "Pending":
                $style = "badge bg-warning";
                break;
            case "Approved":
                $style = "badge bg-info";
                break;
            case "Rejected":
                $style = "badge bg-danger";
                break;
            case "Finished":
                $style = "badge bg-success";
                break;
        }
        return $style;

    }

    public static function errorMessage($code){
        switch ($code){
            case 100: return "Gagal terhubung dengan API CIS";
            // case 200: return "Data rencana kerja yang diminta tidak tersedia";
            // case 300: return "Data konfirmasi belum tepat, silahkan mencoba kembali";
            default: return "";

        }
    }

}
