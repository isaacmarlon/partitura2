<?php 
    if ($stmt = $mysqli->prepare('CALL verInstrumentos(?)')) {
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $stmt->store_result();

        $stmt->bind_result($instrumento);

        $instrumentos = array();


        // pega todos os instrumentos do músico
        while($stmt->fetch()) {
            array_push($instrumentos, $instrumento);    
        }

        $_SESSION["instrumentos"] = $instrumentos;
        print_r($_SESSION["instrumentos"]); // questoes de debug
    }
?>