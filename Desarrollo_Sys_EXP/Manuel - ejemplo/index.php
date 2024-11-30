<?php
include 'conexion2.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class=''>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../">Tecnologias Web</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <!--<div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>-->
        </div>
    </header>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Aplicación de <br>Sistema Experto</h2>

        </div>
    </div>
    <div class="main">
        <div class="">
            <div class="login-form">
                <form>

                    <!--                 <div class="form-group">
                        <label for="exampleFormControlSelect1">Listado de Sintomas</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option value="">SELECCIONE UN SINTOMA </option>
                            <?php

                            $sql = "SELECT * FROM sintomas_falla ;";
                            $result = mysqli_query($conexion, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option id="id_sintoma" value="' . $row['id_sintoma'] . '">' . $row['sintoma_descrip'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    
                    -->
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Selecione Sintomas del siguiente Listado</label>

                        <?php

                        $sql = "SELECT * FROM sintomas_falla ;";
                        $result = mysqli_query($conexion, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<div class="form-check">
                        <input class="form-check-input" type="checkbox" value="' . $row['id_sintoma'] . '" id="id_sintoma" name="checkbox' . $row['id_sintoma'] . '">
                        <label class="form-check-label" for="checkbox' . $row['id_sintoma'] . '">' . $row['sintoma_descrip'] . '
                        </label></div>';
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <button type="button" id="consulta" class="btn btn-outline-primary col-6 mt-2">Consultar</button>
                    </div>

                    <div class="form-group">


                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- ModalProducto(Agregar) -->
    <div class="modal fade" id="ModalProducto" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label id="desc_falla" for="exampleFormControlTextarea1">Descripción posible falla</label>

                    </div>
                    <div class="form-group">

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-success" onclick="location.reload()">Regresar</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./consulta.js"></script>
</body>



<Style>
    body {
        font-family: "Lato", sans-serif;
    }

    .main-head {
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
    }

    @media screen and (max-width: 450px) {
        .login-form {
            margin-top: 10%;
        }

        .register-form {
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px) {
        .main {
            margin-left: 40%;
        }

        .sidenav {
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form {
            margin-top: 15%;
        }

        .register-form {
            margin-top: 20%;
        }
    }

    .login-main-text {
        margin-top: 20%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2 {
        font-weight: 300;
    }

    .btn-black {
        background-color: #000 !important;
        color: #fff;
    }
</Style>

</html>