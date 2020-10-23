<?php

/**
 * Arquivo de configuração do banco de dados.
 * Recurso utilizado: MySqli.
 */

namespace Config;

use mysqli;
use FFI\Exception;
 
abstract class Connection
{
    protected function connect(){
        try{
            $connection = new mysqli("localhost", "root", "", "comercio_db");
            return $connection;
        }catch(Exception $error){
            return $error->getMessage();
        }
    }
    
}


