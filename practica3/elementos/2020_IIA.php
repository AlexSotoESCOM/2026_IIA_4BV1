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
    $materias[0][3] = "Científica Básica";
    $materias[0][4] = 7.5;

    // Podemos hacer que el arrreglo tenga todos los valores en la nueva posición de la siguiente forma:
    $materias[1] = [
        1,
        "Ánálisis Vectorial",
        "Resuelve problemas geométricos y físicos a partir del estudio de las propiedades de los vectores, las funciones vectoriales en el espacio tridimensional y los teoremas integrales de Gauss",
        "Formación Básica",
        7.5
    ];
    $materias[2] = [
        1,
        "Matemáticas discretas",
        "Plantea algoritmos matemáticos y estructuras discretas con base en sus propiedades y argumentos válidos con lenguaje formal.",
        "Científica Básica",
        10.5
    ];

    $materias[3] = [
        1,
        "Comunicación oral y escrita",
        "Presenta discursos con base en la comunicación oral, escrita y su contexto.",
        "Institucional",
        7.5
    ];
    $materias[4] = [
        1,
        " Fundamentos de programación ",
        "Programa aplicaciones a partir de sentencias de control, funciones, apuntadores y archivos.",
        "Profesional",
        7.5
    ];

    $materias[5] = [
        2,
        "Algebra lineal",
        "Aplica los métodos de eliminación de Gauss-Jordan matricial con pivoteo a partir de las transformaciones lineales,los espacios vectoriales, valores y vectores propios",
        "Científica Básica",
        9
    ];

    // definimos la función
    function imprimeDatosMat(array $datos)
    {
        // recibimos el arreglo
        //        Inicializamos el renglón        
        $totalMaterias = count($datos);

        for ($j = 0; $j < $totalMaterias; $j++) {
            echo "<tr>";
            for ($i = 0; $i < 5; $i++) {
                echo "<td>" . $datos[$j][$i] . "</td>";
            }
            // terminamos el renglón
            echo "</tr>";
        }
        return $totalMaterias;
    }

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

                    <?php
                    $resultado = imprimeDatosMat($materias);
                    echo $resultado;
                    // Se utiliza la función 

                    ?>

                </table>
            </article>
        </section>
    </main>
</body>

</html>