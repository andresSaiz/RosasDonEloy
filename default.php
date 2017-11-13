<?php
 //   echo "Default Service Rosas donen Loy";
    header('Content-Type: application/json');
    
    function sincronizar(){
        $values = array('pruebas','pruebas1');
        return $values;
    }
    if($_GET['solicitud'] == 'sincronizar'){
        $response = sincronizar();
    }else if($_GET['solicitud'] == 'clientes'){
        $response = sincronizar();
    }else{
        header('HTTP/1.1 405 Metodo no Encontrado');
        exit();
    }
    echo json_encode($response,true);
?>