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




        public function convertirImagenPdf(){

            // Variables de entrada
            $anchoPdf = 210;
            $altoPdf  = 297;
            $margenPdf = 10;


            $nombreP = 'Johan Muelas';
            $cedulaP =  '1010107814';
            $fecha  ='21/10/2021';
            $fechaDir = str_replace('/','-',$fecha);
            $fechaNom = str_replace('/','-',$fecha);
            

            // $nombreArchivo = "./upload/HC/$nombreP/$fechaDir"."/".$nombreP.'-'.$fecha.'.pdf';
            $nombreArchivo = "./upload/HC/$nombreP/$fechaDir"."/".$nombreP.'-'.$fechaNom.".pdf";

            


            // Se obtiene la imagen.
            $img1 = '../img/Pag1.jpeg';
            $img2 = '../img/Pag2.jpeg';

            // Se crea la segmentacion de carpetas.
            // Se consulta si la carpeta upload
            if(!is_dir('./upload')){
                mkdir('upload');
            }

            // Se consulta si la carpeta HC existe
            if(!is_dir('./upload/HC')){
                mkdir('upload/HC');
            }

            // Se consulta si la carpeta del paciente Existe
            if(!is_dir("./upload/HC/$nombreP")){
                mkdir("./upload/HC/$nombreP");
            }

            // Se consulta si la carpeta con la fecha Existe
            if(!is_dir("./upload/HC/$nombreP/$fechaDir")){
                mkdir("./upload/HC/$nombreP/$fechaDir");
            }



            $pag1 = array();
            $pag1['x']=0;
            $pag1['y']=0;
            list($pag1['ancho'], $pag1['alto'], $pag1['tipo'],$pag1['attr']) = getimagesize($img1);


            // Se verifica cual es el tamaño mas grande
            if($pag1['ancho'] >= $pag1['alto']){
                // Validar si el tamaño del ancho corresponde al del pdf
                if($anchoPdf!=$pag1['ancho']){
                    // Se realiza el cambio
                    $pag1['alto'] = ($pag1['alto'] * $anchoPdf) / $pag1['ancho'];

                    // Se actualiza el ancho
                    $pag1['ancho'] = $anchoPdf;

                    //Se configura la cordenada inversa para centrar la imagen
                    $pag1['y'] = ($altoPdf - $pag1['alto'])/2;
                }
            }else{
                // Validar si el tamaño del ancho corresponde al del pdf
                if($altoPdf!=$pag1['alto']){
                    // Se realiza el cambio
                    $pag1['ancho'] = ($pag1['ancho'] * $altoPdf) / $pag1['alto'];

                    // Se actualiza el ancho
                    $pag1['alto'] = $altoPdf;

                    //Se configura la cordenada inversa para centrar la imagen
                    $pag1['x'] = ($anchoPdf - $pag1['ancho'])/2;
                }
            }


            $pag2 = array();
            $pag2['x']=0;
            $pag2['y']=0;
            list($pag2['ancho'], $pag2['alto'], $pag2['tipo'],$pag2['attr']) = getimagesize($img2);



            // Se verifica cual es el tamaño mas grande
            if($pag2['ancho'] >= $pag2['alto']){
                // Validar si el tamaño del ancho corresponde al del pdf
                if($anchoPdf!=$pag2['ancho']){
                    // Se realiza el cambio
                    $pag2['alto'] = ($pag2['alto'] * $anchoPdf) / $pag2['ancho'];

                    // Se actualiza el ancho
                    $pag2['ancho'] = $anchoPdf;

                    //Se configura la cordenada inversa para centrar la imagen
                    $pag2['y'] = ($altoPdf - $pag2['alto'])/2;
                }
            }else{
                // Validar si el tamaño del ancho corresponde al del pdf
                if($altoPdf!=$pag2['alto']){
                    // Se realiza el cambio
                    $pag2['ancho'] = ($pag2['ancho'] * $altoPdf) / $pag2['alto'];

                    // Se actualiza el ancho
                    $pag2['alto'] = $altoPdf;

                    //Se configura la cordenada inversa para centrar la imagen
                    $pag2['x'] = ($anchoPdf - $pag2['ancho'])/2;
                }
            }


            // Se convierte la imagen a PDF.

            // Libreria para la conversion a pdf
            require('../lib/fpdf/fpdf.php');

            // Se ingresa el tamaño de la hoja
            $pdf = new FPDF('P', 'mm', array($anchoPdf,$altoPdf));

            // $pdf = new FPDF('P', 'mm','A4');

            $pdf->AddPage();
            $pdf->Image($img1,($pag1['x']+($margenPdf/2)), ($pag1['y']+($margenPdf/2)), ($pag1['ancho']-$margenPdf), ($pag1['alto']-$margenPdf));

            $pdf->AddPage();
            $pdf->Image($img2, ($pag2['x']+($margenPdf/2)), ($pag2['y']+($margenPdf/2)), ($pag2['ancho']-$margenPdf), ($pag2['alto']-$margenPdf));

            $pdf->output($nombreArchivo,"f",true);
            // $pdf->Output();

            echo 'Todo/OK';

            // Se guarda el pdf en la ubicacion.

        }
    }


?>