<?php

    class PartiturasDao {

        const DIR_MSC = './Músicas';
        
        static function getMusicas() {

            $musicasResult = array();

            if (is_dir(PartiturasDao::DIR_MSC)) { // ENCONTROU DIRETÓRIO DE MÚSICAS
            
                $pastas = scandir(PartiturasDao::DIR_MSC);
                
                foreach ($pastas as $msc) {
                    if (strlen($msc) > 2) { // DEVIDO AOS . e .. DO LINUX
                        array_push($musicasResult, $msc);
                    }
                }
    
            } else {
                echo 'Erro 1: Diretório não encontrado.';
            }
    
            return $musicasResult;
            
        }

        static function getNaipes($musica) {

            $dirNaipes = PartiturasDao::DIR_MSC . "/" . $musica;

            $naipesResult = array();

            echo $dirNaipes;

            if (is_dir($dirNaipes)) {

                $naipes = scandir($dirNaipes);

                foreach ($naipes as $naipe) {
                    $naipeSplit = explode($musica, $naipe);

                    if (sizeof($naipeSplit) > 1) {
                        if (strlen($naipeSplit[1]) > 2) { // DEVIDO AOS . e .. DO LINUX
                            $realNaipes = explode(".pdf", $naipeSplit[1]);
                            array_push($naipesResult, $realNaipes[0]);
                        }    
                    }
                    
                }
            } else {
                echo 'Erro 2: Diretório não encontrado.';
            }

            return $naipesResult; 
        }
    
        static function getPartituraNaipe($musica, $naipeBuscar) {

            $dirPartituras = PartiturasDao::DIR_MSC . '/' . $musica;

            $partituraResult = array();

            if (is_dir($dirPartituras)) {

                $partituras = scandir($dirPartituras);

                foreach ($partituras as $part) {

                    $partSplited = explode($musica, $part);

                    if (sizeof($partSplited) > 1) {
                        if (strpos($partSplited[1], $naipeBuscar) !== false) {
                            array_push($partituraResult, $part);
                        }
                    }
                }
            } else {
                echo 'Erro 3: Diretório não encontrado.';
            }

            return $partituraResult; 
        }

    }
?>