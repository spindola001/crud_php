<?php 

include "../../config/Variaveis.php";
include "../../config/Crud.php";

$crud = new Crud();

if ($action = "cadastrar"){
    $crud->insert(
        "formlogin_tbl",
        "?,?,?",
        "iss",
        array(
            $id,
            $email,
            $passwd
        )
    );
    
    echo "Cadastrado com sucesso!!!";
}else{
    $crud->update(
        "formlogin_tbl",
        "userID=?, userEmail=?, userPasswd=?",
        "userID=?",
        "iss",
        array(
            $id,
            $email,
            $passwd
        )
    );

    echo "Cadastro editado com sucesso!!!";
}

