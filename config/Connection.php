<?php

/**
 * Arquivo de configuração do banco de dados.
 * Recurso utilizado: MySqli.
 */

abstract class Connection
{
    protected function conn(){
        try{
            $connection = new mysqli("localhost", "root", "", "users_db");
            return $connection;
        }catch(Exception $error){
            return $error->getMessage();
        }
    }
    
}