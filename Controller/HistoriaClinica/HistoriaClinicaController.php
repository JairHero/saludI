<?php
    include_once '../model/historiaClinica/HistoriaClinicaModel.php';
    class HistoriaClinicaController {
        
        public function cargarHistorias(){
            
            include_once '../view/cargaHistoriaClinica/cargaHistoriaClinica.php';

        }

        public function convertirImagenaTexto(){
            
            if (!isset($_FILES["imgHistoria"])) {
                exit("No hay imagen");
            }
        
            $imagen = $_FILES["imgHistoria"];
            $ubicacionImagen = $imagen["tmp_name"];
            $comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l spa ";
        
            exec($comando, $textoDetectado, $codigoSalida);
        
            if ($codigoSalida === 0) {
                // Tenemos el texto como un array, podemos unirlo
                $textoComoCadena = join("\n", $textoDetectado);

                include_once '../view/cargaHistoriaClinica/cargaHistoriaClinica.php';


            } else {
                echo "Error detectando texto. Por favor verifique que la imagen existe y que el programa de detección está instalado y es accesible desde PHP. El código de salida es: " . $codigoSalida;
            }
            
        }
    }


?>