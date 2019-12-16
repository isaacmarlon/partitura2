<?php

    class PartiturasDao {

        const DIR_MSC = "./Músicas";
        
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

            if (is_dir($dirNaipes)) {

                $naipes = scandir($dirNaipes);

                foreach ($naipes as $naipe) {
                    if (strlen($naipe) > 2) { // DEVIDO AOS . e .. DO LINUX
                        array_push($naipesResult, $naipe);
                    }
                }
            } else {
                echo 'Erro 2: Diretório não encontrado.';
            }

            return $naipesResult; 
        }
    
        static function getPartituraNaipe($musica, $naipeBuscar) {

            $dirPartituras = PartiturasDao::DIR_MSC . "/" . $musica . "/" . $naipeBuscar;

            $partituraResult = array();

            if (is_dir($dirPartituras)) {

                $partituras = scandir($dirPartituras);

                foreach ($partituras as $part) {
                    if (strlen($part) > 2) { // DEVIDO AOS . e .. DO LINUX
                        array_push($partituraResult, $part);
                    }
                }
            } else {
                echo 'Erro 3: Diretório não encontrado.';
            }

            return $partituraResult; 
        }

    }
?>