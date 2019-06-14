<?php

if (! function_exists('removeMaskCpf')) {
    function removeMaskCpf($cpf) {
        return preg_replace("/[^\d]+/", "", $cpf);
    }
}

if (! function_exists('removeMaskCnpj')) {
    function removeMaskCnpj($cnpj) {
        return preg_replace("/[^\d]+/", "", $cnpj);
    }
}

if (! function_exists('removeMask')) {
    function removeMask($string) {
        return preg_replace("/[^\d]+/", "", $string);
    }
}



function mask($mask,$str){

    $str = str_replace(" ","",$str);

    for($i=0;$i<strlen($str);$i++){
        $mask[strpos($mask,"#")] = $str[$i];
    }

    return $mask;

}

if(! function_exists('toMoney')){
    function toMoney($value){
        $val = str_replace(',','.',str_replace('.','',$value));        
        return $val;
    }
}

if(!function_exists('toEmbed')){
    function toEmbeb($string){
        $url = str_replace('watch?v=','embed/',$string);
        return $url;      
    }
}



