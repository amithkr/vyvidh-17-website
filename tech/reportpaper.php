<?php  
$conn = new mysqli('localhost', '', '');  
mysqli_select_db($conn, 'vidyaaca_vyvidh14');  
$setSql = "SELECT * FROM paperpresentation ";  
$setRec = mysqli_query($conn, $setSql)or die(mysqli_error($conn));

  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "name" . "\t" .  "email" . "\t" ."college"."\t" . "contact no" . "\t" . "event"."\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  

$name="paperpresentation.xls";
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=$name");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  
