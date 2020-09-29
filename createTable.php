<?php
class create{
        var $sql;
        function createData(){
                require 'konfigurasi.php';
                $sql = file_get_contents('migrasi.sql');
                if (mysqli_query($conn, $sql)) {
                        echo json_encode(array("statusCode"=>200));
                } 
                else {
                        echo json_encode(array("statusCode"=>201));
                }
                mysqli_close($conn);
        }
}
$create = new create();
echo $create->createData();
?>