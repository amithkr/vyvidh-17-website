<?php  
   
include("check.php");	

  
$setSql = "SELECT * FROM reggroup" ;  
$setRec = mysqli_query($db, $setSql)or die(mysqli_error($db));

  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "groupname" . "\t" . "college" . "\t" . "email" . "\t" . "contact no" . "\t" . "hosting dept" . "\t" . "event" . "\t" ;  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  

$name="allsingle.xls";
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=$name");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  