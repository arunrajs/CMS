<?php 
include("../../../common/config/config.php");
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 
 
// Get search term 
$searchTerm = $_GET['term']; 
 
// Fetch matched data from the database 
$query = $db->query("SELECT * FROM size WHERE SizeName LIKE '%".$searchTerm."%' AND Active = 1 ORDER BY SizeName ASC"); 
 
// Generate array with skills data 
$data_load = array(); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $data['SID'] = $row['SID']; 
        $data['value'] = $row['SizeName']; 
        $data['Height'] = $row['Height']; 
        $data['Weight'] = $row['Weight']; 
        $data['Gage'] = $row['Gage']; 
        $data['unit'] = $row['unit']; 
        array_push($data_load, $data); 
    } 
} 
 
// Return results as json encoded array 
echo json_encode($data_load); 
?>