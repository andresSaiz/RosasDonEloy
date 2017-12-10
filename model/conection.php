<?php
require('../config/config.php');
class conection
{
    
    private static $instance;

    public function __contruct(){
       
    }
 
    
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function validateConection(){
      /*   
      try {
            $dbh = new PDO("odbc:".DSN,
                          USUARIO,
                          CLAVE
                         );
            $stmt = $dbh->prepare("select 
                                    DocNum 'Num Documento'
                                    ,DocDate 'Fecha de contabilizacion'
                                    ,U_RDE_NomDest 'Destinatario'
                                    ,U_RDE_DirEntrega 'Direccion de entrega'
                                    ,U_RDE_Apt 'Apartamento'
                                    ,U_RDE_Trr 'Torre'
                                    ,U_RDE_Conductor 'Conductor'
                                    ,U_RDE_Auxiliar 'Auxiliar'
                                    ,U_RDE_Florista 'Florista'
                                    ,U_RDE_TelEnvio 'Telefono Destinatario'
                                    ,U_RDE_HoraEnt 'Hora Entrega'
                                    ,U_RDE_TipDesp 'Codigo Tipo Despacho'
                                    ,'Tipo de despacho' = CASE WHEN T0.U_RDE_TipDesp=01 THEN 'Despachado de la misma sucursal'WHEN T0.U_RDE_TipDesp=02 THEN 'Despachado de la misma sucursal a pie'	WHEN T0.U_RDE_TipDesp=03 THEN 'Despachado de otra sucursal'	WHEN T0.U_RDE_TipDesp=04 THEN 'Despachado de otra sucursal a pie'WHEN T0.U_RDE_TipDesp=05 THEN 'Retirado' WHEN T0.U_RDE_TipDesp=06 THEN 'Env�o nacional (fedex)' WHEN T0.U_RDE_TipDesp=07 THEN 'Taxi pagado por el cliente'	WHEN T0.U_RDE_TipDesp=08 THEN 'Taxi asumido por Don Eloy'WHEN T0.U_RDE_TipDesp=09 THEN 'Rosa Veloz'	END
                                    ,U_RDE_FEDEX 'Fedex'
                                    ,U_RDE_Observ 'Obvservaciones'
                                    ,U_RDE_Recorrido 'Recorrido'
                                    ,U_RDE_Ciudad 'Ciudad'
                                    from ODLN t0
                                    --inner join dln1 t1 on t0.DocEntry = t1.docentry
                                    --LEFT JOIN OHEM t2 ON t0.U_RDE_Conductor = t2.empID
                                    where t0.CANCELED='N' AND T0.DocDate>='20171101' AND T0.DocDate<='20171130' ");
          $stmt->execute();
          $all = $stmt->fetchALL(PDO::FETCH_ASSOC);
          
        } catch (PDOException $exception) {
            //$all = $exception->getMessage();
            //exit;
        }*/
        $all = array('errores');
        return $all;
        //echo USUARIO;
        
    }
}
    //$miConection = conection::getInstance();
?>