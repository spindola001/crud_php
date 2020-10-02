<?php include "default/Header.php"?>
<?php include "../config/Crud.php"?>

    <div class="container col-8">
        <div class="row">

            <div id="result" class="alert alert-success d-none mt-5 col-12 text-center" role="alert"></div>

            <table class="table table-dark mt-5 text-center">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $crud = new Crud();
                        $select = $crud->select(
                            "*",
                            "formlogin_tbl",
                            "",
                            "",
                            array()
                        );

                        while ($result=$select->fetch_all()) {
                            foreach ($result as $fetch) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $fetch[0]?></th>
                                    <td><?php echo $fetch[1]?></td>
                                    <td><?php echo $fetch[2]?></td>
                                    <td>
                                        <a href="<?php echo "Visualizar.php?userID={$fetch[0]}"; ?>" class="btn btn-info">Visualizar</a>
                                        <a href="<?php echo "Cadastrar.php?userID={$fetch[0]}"?>" class="btn btn-success">Atualizar</a>
                                        <a href="<?php echo "../src/controllers/DeleteController.php?userID={$fetch[0]}"?>" class="btn btn-danger deletar">Deletar</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
            <a href="Index.php" class="btn btn-primary col-12">Inicio</a>
        </div>
        
    </div>

<?php include "default/Footer.php"?>