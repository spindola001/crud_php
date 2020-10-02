<?php include "default/Header.php"?>
<?php include "../config/Crud.php"?>

<div class="container col-4">
    <div class="row">
        <?php
            $crud = new Crud();
            $id = filter_input(INPUT_GET, 'userID', FILTER_SANITIZE_SPECIAL_CHARS);

            $select = $crud->select(
                "*",
                "formlogin_tbl",
                "WHERE userID=?",
                "i",
                array(
                    $id
                )
            );
            $result = $select->fetch_all();

            foreach ($result as $fetch) {
                ?>

            <div class="jumbotron mt-5">
                <h1 class="display-5">Dados do usuário</h1>
                <hr class="my-4">
                <strong>Email: </strong><?php echo $fetch[1]?><br>
                <strong>Senha: </strong><?php echo $fetch[2]?>
            </div>
            <?php
            }
        ?>
        <a href="Index.php" class="btn btn-primary col-10">Inicio</a>
    </div>
</div>

<?php include "default/Footer.php"?>