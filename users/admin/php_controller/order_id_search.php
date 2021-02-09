<?php 
include("../../../common/config/config.php");
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 
 
// Get search term 
$searchTerm = $_GET['term']; 
 
// Fetch matched data from the database 
$query = $db->query("SELECT * FROM orders WHERE OrdID LIKE '%".$searchTerm."%' AND CurrOrderStatus = 1 ORDER BY OrdID ASC"); 
 
// Generate array with skills data 
$data_load = array(); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 
        $data['OrdID'] = $row['OrdID']; 
        $data['value'] = $row['OrdID']; 
        $data['customer_id'] = $row['CustID'];
        $customer_id=$row['CustID'];
        $size_id=$row['SID'];
        	$query_customer = "SELECT * FROM customers WHERE CustID=$customer_id";
  			$result_customer = mysqli_query($db, $query_customer);
  			while($row_customer = mysqli_fetch_array($result_customer)){
	  				$customer_name=$row_customer["Customer"];
	  			}
	  		$query_size = "SELECT * FROM size WHERE SID=$size_id";
	  		$result_size=mysqli_query($db,$query_size);
	  		while($row_size = mysqli_fetch_array($result_size)){

	  			$size_name= $row_size["SizeName"];
                $size_id_hd= $row_size["SID"];
	  		}

	  	$data['customer_name'] = $customer_name; 
	  	$data['size_name'] = $size_name; 
	  	$data['Qty'] = $row['Qty']; 
	  	$data['Unit'] =  $row['Unit']; 
        $data['size_id_hd'] =  $size_id_hd; 
        array_push($data_load, $data); 
    } 
} 
 
// Return results as json encoded array 
echo json_encode($data_load); 
?>