<?php include "default/Header.php"?>

<?php

include "C:/xampp/htdocs/workspace/test/config/Crud.php";

if (isset($_GET['userID'])){
    $action = "editar";

    $crud = new Crud();
    $update = $crud->select(
        "*",
        "formlogin_tbl",
        "WHERE userID=?",
        "i",
        array(
            $_GET['userID']
        )
    );
    $result = $update->fetch_all();
    foreach ($result as $fetch) {
        $id = $fetch[0];
        $email = $fetch[1];
        $passwd = $fetch[2];
    }

}else{
    $action = "cadastrar";
    $id = "";
    $email = "";
    $passwd = "";
}

?>

    <div class="container col-3">
        <div class="row">
            <div class="col-10">

                <?php include "default/FormCad.php"?>
            
            </div>
        </div>
    </div>

<?php include "default/Footer.php"?>