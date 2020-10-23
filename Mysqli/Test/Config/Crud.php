<?php 

/**
 * Configurgação do CRUD
 */

namespace Config;

use Config\Connection;

class Crud extends Connection {

    public function insert($table, $condition, $types, $params){
        $connection = $this->connect();

        $stmt = $connection->prepare("INSERT INTO {$table} VALUES {$condition}");

        $countParams = count($params);
        if($countParams > 0){
           $callParams = array();
            foreach($params as $Key => $param){
                $callParams[$Key] = &$params[$Key];
            }
            array_unshift($callParams, $types);
            call_user_func_array(array($stmt,'bind_param'),$callParams);
        }
        if ($stmt->execute()){
            $stmt->close();
        }
    }

    public function select($fields, $table, $condition, $types, $params){
        $connection = $this->connect();

        $stmt = $connection->prepare("SELECT {$fields} FROM {$table} WHERE {$condition}");

        // var_dump($stmt);
        // die;

        $countParams = count($params);
        if($countParams > 0){
           $callParams = array();
            foreach($params as $Key => $param){
                $callParams[$Key] = &$params[$Key];
            }
            array_unshift($callParams, $types);
            call_user_func_array(array($stmt,'bind_param'),$callParams);
        }
        if ($stmt->execute()){

            $response = $stmt->get_result();

            $stmt->close();
        }

        return $response;
    }

    public function delete($table, $condition, $types, $params){
        
    }

    public function update($table, $set, $condition, $types, $params){
        
    }

}