<?php

spl_autoload_register(function ($class){

    $dir = [
        'Libraries',
        'Helpers'
    ];

    foreach($dir as $diretorio){
        $arquivo = (__DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$class.".php");
        if(file_exists($arquivo)){
            require_once($arquivo);
        }
    }
});