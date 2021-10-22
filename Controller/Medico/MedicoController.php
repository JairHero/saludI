<?php 

    include_once '../model/Medico/MedicoModel.php';

    class MedicoController{
        public function consult(){
          
            

            include_once '../view/Medico/consult.php';

        }

        public function getInsert(){


            include_once '../view/Medico/insert.php';

        }
    }
?>