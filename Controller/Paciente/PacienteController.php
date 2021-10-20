<?php 

    include_once '../model/Paciente/PacienteModel.php';

    class PacienteController{
        public function consult(){
          
            
            include_once '../view/Paciente/consult.php';

        }

        public function getInsert(){


            include_once '../view/Paciente/insert.php';

        }
    }
?>