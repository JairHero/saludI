<?php
    include_once '../model/historiaClinica/HistoriaClinicaModel.php';
    class HistoriaClinicaController {
        
        public function cargarHistorias(){
            
            include_once '../view/cargaHistoriaClinica/cargaHistoriaClinica.php';

        }

        public function convertirImagenaTexto(){
            // var_dump($_FILES);
            // exit;
            if (!isset($_FILES["imgHistoria"])) {

                // $faltaImagen = 0;
    
                include_once '../view/cargaHistoriaClinica/cargaHistoriaClinica.php';
            }
        
            $imagen = $_FILES["imgHistoria"];
            $ubicacionImagen = $imagen["tmp_name"];
            $comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l spa ";
        
            exec($comando, $textoDetectado, $codigoSalida);

            
            if ($codigoSalida === 0) {
                // Tenemos el texto como un array, podemos unirlo
                $textoComoCadena = join("\n", $textoDetectado);
                // aqui colocamos la cadena de texto de la cual vamos a extraer la informacion
                $cadena_de_texto = $textoComoCadena;
               
                // se coloca la palabra que estamos buscando
                // $cadena_buscada   = 'CEDULA CIUDADANIA';
                // $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);
                // $posicion_coincidencia += 18;
                
                // $CEDULA = substr($cadena_de_texto, ($posicion_coincidencia), 10 );
                
                // //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
                // if ($posicion_coincidencia === false) {
                    //     echo "NO se ha encontrado la palabra deseada!!!!";
                    // } else {
                        //     include_once '../view/cargaHistoriaClinica/formularioHistoriaClinica.php';
                        // }
                        
                include_once '../view/cargaHistoriaClinica/formularioHistoriaClinica.php';
                        
            }
        }
    }


?>