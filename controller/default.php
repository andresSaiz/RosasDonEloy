<?php
    require('../model/conection.php');
    class defaultController 
    {
        private static $default;
        
        public function __contruct(){
            
        }
        public static function getInstance()
        {
            if (!isset(self::$default)) {
                self::$default = new self();
            }
            return self::$default;
        }
        function sincronizar(){
            //no defined
            $values = array('pruebas','pruebas1');
            return  $values;
        }
        function colilla(){
            $miConection = conection::getInstance();
            $miConection->validateConection();
            $values = array('error');
            return  $values;
        }
    }
    //design variable
    // default solicitud;
    $midefaultController = defaultController::getInstance();
    
    header('Content-Type: application/json');
    
    if($_GET['solicitud'] == 'sincronizar'){
        $response =  $midefaultController-> sincronizar();
    }else if($_GET['solicitud'] == 'clientes'){
        $response = $midefaultController-> sincronizar();
    }else if($_GET['solicitud'] == 'colilla'){
        $response = $midefaultController-> colilla();
    }else{
        header('HTTP/1.1 405 Metodo no Encontrado');
        exit();
    }
    echo json_encode($response,true);
?>