<?php
include("db.php");

$con=conectar();

$sql="SELECT * FROM ppl";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insertar nombres</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese nombre</h1>
                    <form action="insert.php" method="POST">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">                               
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-md-1">
                
                </div>
                <div class="col-md-4">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Nombres ingresados</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php  echo $row['nombre']?></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 
    </body>
</html>