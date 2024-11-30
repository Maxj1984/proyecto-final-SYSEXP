<?php
include './conexion.php';
$pdo = new Conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['id_sintoma'])) {
        echo '<script type="text/javascript">
        alert("Campos vacios, por favor relacione una falla con sus sintomas");
        window.location.href="../grabar.php";
        </script>';
        exit;
    } else {
        $sintoma = $_POST['id_sintoma'];
        $solucion = $_POST['falla'];

        $sql = "INSERT INTO sintoma_solucion (sintoma, solucion, relacion) VALUES (?,?,0)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$sintoma, $solucion]);
        header("HTTP/1.1 200 OK");
        echo '<script type="text/javascript">
        alert("Relación Guardada, vaya a selección de Sintomas para visualizar");
        window.location.href="../grabar.php";
        </script>';
        exit;
    }
}
