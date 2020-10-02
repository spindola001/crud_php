<?php 

/**
 * Configurgação do CRUD
 */

include "Connection.php";

class Crud extends Connection {
    
    private $crud;
    private $count;
    private $result;

    private function preparedStatements($query, $types, $params){
        $this->countParams($params);
        $conn = $this->conn(); 
        $this->crud = $conn->prepare($query);

        if ($this->count > 0) {
            $callParams = array();

            foreach ($params as $key => $param ) {
               $callParams[$key] = &$params[$key];
            }
            array_unshift($callParams, $types);
            call_user_func_array(array($this->crud, 'bind_param'), $callParams);
        }

        $this->crud->execute();
        $this->result = $this->crud->get_result();
    }

    private function countParams($params){
        $this->count = count($params);
    }

    public function insert($table, $condition, $types, $params){
        $this->preparedStatements("INSERT INTO {$table} values ({$condition})", $types, $params);
        return $this->crud;
    }

    public function select($fields, $table, $condition, $types, $params){
        $this->preparedStatements("SELECT {$fields} FROM {$table} {$condition}", $types, $params);
        return $this->result;
    }

    public function delete($table, $condition, $types, $params){
        $this->preparedStatements("DELETE FROM {$table} WHERE {$condition}", $types, $params);
    }

    public function update($table, $set, $condition, $types, $params){
        $this->preparedStatements("UPDATE {$table} SET {$set} WHERE {$condition}", $types, $params);
        return $this->crud;
    }

}