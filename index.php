<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILTRADOR DE BACTERIAS</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <h1>Filtrador de bacterias</h1>
    <form method="POST" action="resultado.php">

        <div>
            <label for="gram+">
                <input type="checkbox" name="prueba[]" value="gram+">Gram+</label>
                
            <label for="gram-">
                <input type="checkbox" name="prueba[]" value="gram-">Gram-</label>

            <label for="urea+">
                <input type="checkbox" name="prueba[]" value="urea+">Urea+</label>

            <label for="urea-">
                <input type="checkbox" name="prueba[]" value="urea-">Urea-</label>

            <label for="oxidasa+">
                <input type="checkbox" name="prueba[]" value="oxidasa+">Oxidasa+</label>

            <label for="oxidasa-">
                <input type="checkbox" name="prueba[]" value="oxidasa-">Oxidasa-</label>

            <label for="catalasa+">
                <input type="checkbox" name="prueba[]" value="catalasa+">Catalasa+</label>

            <label for="catalasa-">
                <input type="checkbox" name="prueba[]" value="catalasa-">Catalasa-</label>

            <label for="esporaSi">
                <input type="checkbox" name="prueba[]" value="esporasSi">Esporsas sí</label>

            <label for="esporasNo">
                <input type="checkbox" name="prueba[]" value="esporasNo">Esporas no</label>

            <label for="capsulaSi">
                <input type="checkbox" name="prueba[]" value="capsulaSi">Capsula sí</label>

            <label for="capsulaNo">
                <input type="checkbox" name="prueba[]" value="capsulaNo">Capsula no</label>  
                
            <label for="movilidad">
                <input type="checkbox" name="prueba[]" value="movilidad">Movilidad</label>

            <label for="inmovilidad">
                <input type="checkbox" name="prueba[]" value="inmovilidad">Inmovilidad</label>

            <label for="aerobio">
                <input type="checkbox" name="prueba[]" value="aerobio">Aerobio</label>

            <label for="anaerobio">
                <input type="checkbox" name="prueba[]" value="anaerobio">Anaerobio</label>

            <label for="coagulasa+">
                <input type="checkbox" name="prueba[]" value="coagulasa+">Coagulasa+</label>

            <label for="coagulasa-">
                <input type="checkbox" name="prueba[]" value="coagulasa-">Coagulasa-</label>

            <label for="manitol+">
                <input type="checkbox" name="prueba[]" value="manitol+">Manitol+</label>

            <label for="manitol-">
                <input type="checkbox" name="prueba[]" value="manitol-">Manitol-</label>

            <label for="lactosa+">
                <input type="checkbox" name="prueba[]" value="lactosa+">Lactosa+</label>

            <label for="lactosa-">
                <input type="checkbox" name="prueba[]" value="lactosa-">Lactosa-</label>

            <label for="glucosa+">
                <input type="checkbox" name="prueba[]" value="glucosa+">Glucosa+</label>

            <label for="glucosa-">
                <input type="checkbox" name="prueba[]" value="glucosa-">Glucosa-</label>

            <label for="maltosa+">
                <input type="checkbox" name="prueba[]" value="maltosa+">Maltosa+</label>

            <label for="maltosa-">
                <input type="checkbox" name="prueba[]" value="maltosa-">Maltosa-</label>

            <label for="sacarosa+">
                <input type="checkbox" name="prueba[]" value="sacarosa+">Sacarosa+</label>

            <label for="sacarosa-">
                <input type="checkbox" name="prueba[]" value="sacarosa-">Sacarosa-</label>
        </div>

            <input id="buscar" type="submit" name="submit" value="Buscar">
    </form>


    <footer>
        <h2>Desarrollado por Abraham Lira</h2>
    </footer>

</body>
</html>