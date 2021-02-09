<?php 
include("../../../common/config/config.php");
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 
 
// Get search term 
$searchTerm = $_GET['term']; 
 
// Fetch matched data from the database 
$query = $db->query("SELECT * FROM suppliers WHERE Supplier LIKE '%".$searchTerm."%' AND Active = 1 ORDER BY Supplier ASC"); 
 
// Generate array with skills data 
$data_load = array(); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $data['SPID'] = $row['SPID']; 
        $data['value'] = $row['Supplier']; 
        array_push($data_load, $data); 
    } 
} 
 
// Return results as json encoded array 
echo json_encode($data_load); 
?>