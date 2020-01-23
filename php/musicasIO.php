<?php
    class MusicasIO {

        const DIR_MSC = './Músicas'; // especifica diretório onde as músicas estão disponíveis
        
        
        private static function isMusica($file) {
            // esse realmente deve ser o critério de diferenciação?
            return (strlen($file) > 2); // devido aos . e .. do linux
        }

        private static function listMusicas() {
            $musicasArray = array();
            
            $files = scandir(MusicasIO::DIR_MSC);
            
            foreach ($files as $file) {
                if (MusicasIO::isMusica($file)) {
                    array_push($musicasArray, $file);
                }
            }

            return $musicasArray;
        }

        private static function isDirOk() {
            return is_dir(MusicasIO::DIR_MSC); // verifica existência do diretório DIR_MSC
        }
        
        public static function getMusicas() {

            if (MusicasIO::isDirOk()) { // diretório das músicas ok
                
                return MusicasIO::listMusicas();

            } else { // OR DIE? 
                echo 'Erro 1: Diretório não encontrado.';
            }
    
            return null;
            
        }

        private static function listNaipesMusica($musica) {
            $dirMusica = MusicasIO::DIR_MSC . "/" . $musica;

            $naipes = scandir($dirMusica); // lê todos os naipes da música

            $naipesResult = array();

            foreach ($naipes as $naipe) {
                $naipeSplit = explode($musica, $naipe); // elimina nome da música

                if (sizeof($naipeSplit) > 1) {
                    if (strlen($naipeSplit[1]) > 2) { // DEVIDO AOS . e .. DO LINUX
                        $realNaipes = explode(".pdf", $naipeSplit[1]); // deixa somente o naipe
                        array_push($naipesResult, $realNaipes[0]);
                    }    
                }
                
            }
            
            return $naipesResult;
        }

        private static function hasMusica($musica) {
            $dirMusica = MusicasIO::DIR_MSC . "/" . $musica;
            return is_dir($dirMusica);
        }

        public static function getNaipes($musica) {

            if (MusicasIO::hasMusica($musica)) { // verifica se existe naipe

                return MusicasIO::listNaipesMusica($musica);
                
            } else {
                echo 'Erro 2: Diretório não encontrado.';
            }

            return null; 
        }
    }
?>