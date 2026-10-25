<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIA</title>
    <?php
    // Ajustamos para llevar en la parte del arreglo el semestre
    $materias[0][0] = 1;
    $materias[0][1] = "Cálculo";
    $materias[0][2] = "Soluciona problemas del área de la ingeniería a partir del cálculo diferencial y  técnicas de integración.";
    $materias[0][3] ="Científica Básica";
    $materias[0][4] = 7.5;

    // Podemos hacer que el arrreglo tenga todos los valores en la nueva posición de la siguiente forma:
    $materias[1] = [1,
                    "Ánálisis Vectorial", 
                    "Resuelve problemas geométricos y físicos a partir del estudio de las propiedades de los vectores, las funciones vectoriales en el espacio tridimensional y los teoremas integrales de Gauss", 
                    "Formación Básica", 
                    7.5];
    $materias[2]=[1,
                    "Matemáticas discretas",
                    "Plantea algoritmos matemáticos y estructuras discretas con base en sus propiedades y argumentos válidos con lenguaje formal.",
                    "Científica Básica",
                    10.5];



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
                        <th>Semestre</th>
                        <th>Nombre</th>
                        <th>Propósito</th>
                        <th>Área de formación</th>
                        <th>Creditos TEPIC</th>
                    </tr>
                    <tr>
                        <?php
                        // Se utiliza un arreglo para resolver

                        for ($i = 0; $i < 5; $i++) {
                            echo "<td>" . $materias[0][$i] . "</td>";
                        }


                        ?>
                    </tr>
                    <tr>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            echo "<td>" . $materias[1][$i] . "</td>";
                        }
                        ?>
                    </tr>

                </table>
            </article>
        </section>
    </main>
</body>

</html>