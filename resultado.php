<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO BÚSQUEDA</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>El resultado de la búsqueda es</h1>

    <?php
        
        /* 
            Cada índice de la matriz guarda una bacteria. Cada sub-array contiene en su primer índice el nombre de la bacteria y en el resto de los índices contiene
            las pruebas correspondientes
        */
    
        $bacterias = array(
            array("B. Anthracis", "catalasa+", "oxidasa+", "manitol-", "glucosa+", "sacarosa+", "esporasSi", "inmovilidad", "capsulaSi"), 
            array("S. Aureus", "gram+", "catalasa+", "oxidasa+", "manitol+","coagulasa+", "glucosa+", "sacarosa+", "anaerobio", "esporasNo", "inmovilidad"),
            array("S. Epidermidis", "gram+", "catalasa+", "oxidasa-", "coagulasa-", "manitol-", "glucosa+", "lactosa+", "maltosa+", "urea+", "anaerobio", "inmovilidad"),
            array("S. Saprophyticus", "gram+", "catalasa+", "oxidasa-", "coagulasa-", "manitol-", "urea+", "anaerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("C. Diphtheriae", "gram+", "catalasa+", "lactosa-", "maltosa+", "aerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("C. Tetani", "gram+", "catalasa+", "anaerobio", "esporasSi", "movilidad"),
            array("C. Botullinum", "gram+", "catalasa-", "anaerobio", "esporasSi", "movilidad", "capsulaSi"),
            array("L. Monocytogenes", "gram+", "catalasa+", "oxidasa-", "coagulasa+", "manitol-", "glucosa+", "anaerobio", "esporasNo", "movilidad", "capsulaSi"),
            array("B. Abortus", "gram-", "catalasa+", "oxidasa+", "aerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("H. Influenzae", "gram+", "catalasa+", "oxidasa+", "anaerobio", "esporasNo", "inmovilidad"),
            array("H. Ducreyi", "gram-", "catalasa+", "oxidasa+"),
            array("C. Trachomatis", "gram-", "inmovilidad"),
            array("N. Gonorrhoeae", "gram-", "catalasa+", "oxidasa+", "glucosa+", "lactosa-", "sacarosa-", "maltosa-", "aerobio", "inmovilidad"),
            array("N. Meningitidis", "gram-", "catalasa+", "oxidasa+", "glucosa+", "lactosa-", "maltosa+", "aerobio"),
            array("S. Flexneri", "gram-", "catalasa+", "lactosa-", "anaerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("S. Disenteriae", "gram-", "manitol-", "lactosa-", "anaerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("G. Vaginalis", "gram-", "anaerobio", "esporasNo", "inmovilidad", "capsulaNo"),
            array("M. Catarrhalis", "gram-", "catalasa+", "oxidasa+", "glucosa-", "lactosa-", "maltosa-", "aerobio"),
            array("L. Interrogans", "gram-", "catalasa+", "oxidasa+", "aerobio", "movilidad"),
            array("L. Biflexa", "gram-", "catalasa+", "oxidasa-", "aerobio", "movilidad"),
            array("U. Urealyticum", "urea+", "esporasNo"),
            array("M. Genitalium", "glucosa+", "esporasNo"),
            array("M. Hominis", "glucosa+", "esporasNo"),
            array("M. Pneumoniae", "glucosa+", "esporasNo")
        );
            
        $pruebas = array(); // Se guardan las pruebas seleccionadas

        $resultado = array(); // guardamos las bacterias que coinciden con las pruebas seleccionadas


        if(isset($_POST['submit'])){ //Para ejecutar PHP script en Submit
            if(!empty($_POST['prueba'])){
                // Bucle para almacenar las pruebas que se seleccionaron
                foreach($_POST['prueba'] as $selected){
                    array_push($pruebas, $selected);
                }
            }
        }

    
        /*
            En esta serie de blucles se comparan las pruebas seleccionadas con cada indice de la matriz "$bacterias"

            Si se encuentra 1 o más coincidencias se guarda en el array "$resultado", el cual guarda las bacterias que coindicen con alguna
            prueba seleccionada
        */
        for($i = 0; $i < count($bacterias); $i++){
            for($j = 1; $j < count($bacterias[$i]); $j++){
                
                // Comparamos el contenido del sub-array con el contenido de pruebas
                // si coinciden lo guardamos en el array resultado
                for($k = 0; $k < count($pruebas); $k++){

                    if(strcmp($bacterias[$i][$j], $pruebas[$k]) == 0){

                        if(!in_array($bacterias[$i][0], $resultado)){
                            array_push($resultado, $bacterias[$i][0]);
                        }

                    }
                }                
            }
        }
    ?>

    <div id="filtro">
        <p id="pSeleccion">Selección:
        <?php
            foreach($pruebas as $p){
                echo $p. "  ";
            }
        ?>
        </p> <!-- Cierra el parrafo -->
    </div>

    <div id="resultado">
        <p>Bacterias:</p>
        <ul>
        <?php
            // Se muestran todas las bacterias que tuvieron coincidencia con las pruebas seleccionadas
            if(!empty($resultado)){
                foreach($resultado as $r){
                    echo "<li>". $r . "</li>";
                    echo "<br>";
                } 
            }else{
                echo "<h3>NO HAY RESULTADOS PARA LA BÚSQUEDA</h3>";
            }
        ?>
        </ul>
    </div>

    <a href="index.php">VOLVER AL INICIO</a>
</body>
</html>
