<?php 

    include_once '../model/Medico/MedicoModel.php';

    class MedicoController{
        public function consult(){
          
            $obj=new MedicoModel();

            $sql="SELECT medId, perNombres, perApellidos, tdoDescripcion, perDocumeno, ipsDescripcion FROM tblPersona tbltipoarticulo natural join tblmedida natural join TblEstado";

            $articulos=$obj->consult($sql);

            include_once '../view/Medico/consult.php';

        }

        public function getInsert(){


            include_once '../view/Medico/insert.php';

        }
    }
?>