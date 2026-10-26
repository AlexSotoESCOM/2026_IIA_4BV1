<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIA</title>
    <link rel="stylesheet" href="../estilo/tabla.css">
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

    $materias[6] = [
        4,
        "Tecnologías para el desarrollo de aplicaciones Web",
        "Desarrolla aplicaciones Web con base en las tecnologías HTML, XML, Java, JavaScript, AJAX, un framework JavaScript y la conexión a bases de datos.",
        "Profesional",
        7.5
    ];


    // Ordenar de forma descendente (del semestre más bajo al más alto),
    //    cambiamos los indices para poder usar el valor de contador
    //    con for en enteros

    /** 
     * el uso del elemento de ordenamiento corresponde al índice del arreglo que queremos
     * pasar 
     * [0]-> semestre
     * [1]->Nombre
     * [2]->Propósito
     * [3]->ärea de formación
     * [4]->Créditos TEPIC 
     */
    /* Podemos ordenar el arreglo sin cambiar sus índices
            usort($materias, function ($a, $b) {
            return $a[0] <=> $b[0];
            });
        */


    // definimos la función

    function imprimeCabecera(int $semestre)
    {
        //recibe el número de semestre e imprime un renglón de cabecera            
        echo "<tr><th colspan='5'> Semestre  " . $semestre . "</th></tr>";
        echo "<tr>
                <th>Semestre</th>
                <th>Nombre</th>
                <th>Propósito</th>
                <th>Área de formación</th>
                <th>Creditos TEPIC</th>
                </tr>";
        return $semestre;
    }

    function imprimeRengDatos(array $datosRenglones)
    {
        foreach ($datosRenglones as $key => $value) {
            echo "<tr>";
            for ($i = 0; $i < 5; $i++) {
                echo "<td>" . $value[$i] . "</td>";
            }
            // terminamos el renglón
            echo "</tr>";
        }
        return 0;
    }


    function imprimeDatosMat(array $datos, int $semestre)
    {
        // recibimos el arreglo
        //        Inicializamos el renglón 
        // Contamos el número de materias que vienen en el arreglo       
        $totalMaterias = count($datos);

        //echo $totalMaterias;
        //echo "<br>" . $semestre;

        //separar las materias del semestre actual del arreglo    

        $semestreActual = array_filter(
            $datos,
            function ($materia) use ($semestre) {
                return $materia[0] == $semestre; // Conservar solo si el semestre es el actual
            }
        );

        //print_r($semestreActual);
        // total de materias del semestre actual
        $totalSemMaterias = count($semestreActual);
        //echo "<br>" . $totalSemMaterias;

        // En caso de estar vacia la variable (no hay materias, no imprimir nada)

        if ($totalSemMaterias > 0) {

            imprimeCabecera($semestre);
            imprimeRengDatos($semestreActual);
        }
        return 0;
    }


    function imprimirTablaCarrera(array $datosMaterias, int $semestresCarrera)
    {
        echo "<table>";
        for ($n = 0; $n < $semestresCarrera; $n++) {
            $resultado = imprimeDatosMat($datosMaterias, $n);
        }

        echo "</table>";
        return 0;
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


                    <?php
                    //$respuestaSemestre=imprimeCabecera(4);
                    //$resultado = imprimeDatosMat($materias,1);
                    //$resultado = imprimeDatosMat($materias,2);
                    //$resultado = imprimeDatosMat($materias,4);
                    //echo $resultado;
                    // Se utiliza la función  imprimeDatosMat
                    // para cada semestre
                   
                    //for ($n = 0; $n < 9; $n++) {
                    //    $resultado = imprimeDatosMat($materias, $n);
                    //}
                    imprimirTablaCarrera($materias,9);
                    ?>

            </article>
        </section>


    </main>
</body>

</html>