<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Tarea 8</title>
</head>

<body>
    <div class="container-fluid">
        <header>

        </header>
        <main>
            <?php
            $registro = array();

            $datosPP = array();
            $datosPP["nombre"] = "Juan";
            $datosPP["apellido"] = "Perez";
            $datosPP["edad"] = 24;
            $datosPP["email"] = "juanperez@gmail.com";
            $datosPP["dni"] = 40235698;

            $datosSP = array();
            $datosSP["nombre"] = "Pedro";
            $datosSP["apellido"] = "Gonzalez";
            $datosSP["edad"] = 32;
            $datosSP["email"] = "perdogonzalez@gmail.com";
            $datosSP["dni"] = 28659897;

            $datosTP = array();
            $datosTP["nombre"] = "Susana";
            $datosTP["apellido"] = "Garcia";
            $datosTP["edad"] = 40;
            $datosTP["email"] = "susanagarcia@gmail.com";
            $datosTP["dni"] = 22649699;

            $datosCP = array();
            $datosCP["nombre"] = "Jorge";
            $datosCP["apellido"] = "Fernandez";
            $datosCP["edad"] = 55;
            $datosCP["email"] = "jorgefernandez@gmail.com";
            $datosCP["dni"] = 18698789;

            $datosQP = array();
            $datosQP["nombre"] = "Agustina";
            $datosQP["apellido"] = "Martinez";
            $datosQP["edad"] = 18;
            $datosQP["email"] = "agustinamartinez@gmail.com";
            $datosQP["dni"] = 47326546;

            $registro[0] = $datosPP;
            $registro[1] = $datosSP;
            $registro[2] = $datosTP;
            $registro[3] = $datosCP;
            $registro[4] = $datosQP;

            echo "<table class=\"table table-dark\" style=\"margin-top: 10px\">";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope=\"col-12 col-sm-2\">Nombre</th>";
            echo "<th scope=\"col-12 col-sm-2\">Apellido</th>";
            echo "<th scope=\"col-12 col-sm-2\">DNI</th>";
            echo "<th scope=\"col-12 col-sm-2\">Edad</thv>";
            echo "<th scope=\"col-12 col-sm-4\">Email</th>";
            echo "</tr>";
            echo "</thead>";

            for ($i = 0; $i < count($registro); $i++) {
                echo "<tbody>";
                echo "<tr>";
                echo "<td class=\"col-12 col-sm-2\">" .$registro[$i]["nombre"]. "</td>";
                echo "<td class=\"col-12 col-sm-2\">" .$registro[$i]["apellido"]. "</td>";
                echo "<td class=\"col-12 col-sm-2\">" .$registro[$i]["dni"]. "</td>";
                echo "<td class=\"col-12 col-sm-2\">" .$registro[$i]["edad"]. "</td>";
                echo "<td class=\"col-12 col-sm-4\">" .$registro[$i]["email"]. "</td>";
                echo "</tr>";
                echo "</tbody>";
            }
            echo "</table>";
            ?>
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>