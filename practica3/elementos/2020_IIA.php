<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIA</title>
    <?php
    $materias[0][0] = "Cálculo";
    $materias[0][1] = "Soluciona problemas del área de la ingeniería a partir del cálculo diferencial y técnicas de integración.";
    $materias[0][2] = "Científica Básica";
    $materias[0][3] = 7.5;
    ?>


</head>

<body>
    <header>
        <h1>Ingeniería en Inteligencia Artificial</h1>
    </header>

    <main>
        <section>
            <article>
                <h3>Materias</h3>
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Propósito</th>
                        <th>Área de formación</th>
                        <th>Creditos TEPIC</th>
                    </tr>
                    <tr>
                        <?php
                            echo "<td>".$materias[0][0] ."</td>";
                            echo "<td>".$materias[0][1] ."</td>";
                            echo "<td>".$materias[0][2] ."</td>";
                            echo "<td>".$materias[0][3] ."</td>";
                        ?>
                    </tr>

                </table>
            </article>
        </section>
    </main>
</body>

</html>