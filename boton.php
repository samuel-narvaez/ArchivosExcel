<?php
    require 'Conexion.php';
    $connection = new Conexion();
    $connect = $connection->get_conexion();
    $sql = "SELECT * FROM facultad";
    $query = $connect->prepare($sql);
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            position: fixed;
            right:40%;
        }

        table{
            position: fixed;
            right:40%;
            top: 13%;
        }

        #imagen{
            position: fixed;
            right:80%;
            top: 50%;
            width:40px; 
            height: 60px;
        }

        #image{
            width:40px; 
            height: 60px;
        }
    </style>
</head>

<body>
<h1>Descagar Facultades Unicor</h1>
    <table >
        <tr>
            <td>ID</td>
            <td>Faculdades</td>
            <td>Más</td>
        </tr>
        <?php
            foreach ($data as $dato) {
                $editRoute = "reporte.php?id=".$dato['id'];
        ?>
        <tr>
            <td><?php echo $dato['id'] ?></td>
            <td><?php echo $dato['nombreFacultad'] ?></td>
            <td>
                <a href="<?php echo $editRoute; ?>"><img id="image" src="img/pdf.png"></a><!--Descarga uno solo-->
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a href="PDF.php"><img id="imagen" src="img/pdf2.png"></a><!--Descarga varios-->
</body>

</html>