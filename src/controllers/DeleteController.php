<?php

include "../../config/Crud.php";

$crud = new Crud();
$id = filter_input(INPUT_GET, 'userID', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->delete(
    "formlogin_tbl",
    "userID=?",
    "i",
    array(
        $id
    )
);

echo "Usuário deletado com sucesso! <br> Volte ao inicio...";