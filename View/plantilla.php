<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo COMPANY; ?></title>
</head>
<?php include "./View/Contenido/links.php"; ?>

<body>
    <?php
    $peticionAjax = false;
    require_once "./Controller/vistasControlador.php";
    $IV = new vistasControlador();
    $vistas = $IV->obtener_vistas_controlador("Administrador");
    ?>
    <?php include "./View/Contenido/modal.php"; ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <?php include "./View/Contenido/nav.php"; ?>

        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include "./View/Contenido/navbar.php"; ?>
            <!-- /#page-content-wrapper -->
            <input type="hidden" id="url" value="<?php echo SERVERURL; ?>">
            <?php require_once $vistas; ?>

        </div>
    </div>
</body>
<?php include "./View/Contenido/scripts.php"; ?>

</html>