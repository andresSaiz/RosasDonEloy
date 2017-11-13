<?php  
$serverName = "ELOYDB01";
    $database = "**Pruebas Don Eloy 01112017**";
    $uid = 'ELOY-AUX.05@co-convergence';
    $pwd = 'CxYo017S';
/*
    try {
        $conn = new PDO("sqlsrv:Server=".$serverName.",1433;Database=".$database, $uid, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    function dbClose(){
        $conn = null;
    }
*/


//$serverName = 'AEGIS-PC\SQLEXPRESS';
$connectionInfo=array('Database'=>$database);

$con = sqlsrv_connect($serverName, $connectionInfo);
if($con){
    echo 'Connection established<br />';
}
else {
    echo 'Connection failed<br />';
    die(print_r(sqlsrv_errors(), TRUE));
}

$sql = "SELECT *  FROM [**Pruebas Don Eloy 01112017**].[dbo].[@HBT_REGIMTRIB]";
$stmt = sqlsrv_query($con, $sql );

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0].", ".$row[1]."<br />";
	//echo "ok\n";
}

?>