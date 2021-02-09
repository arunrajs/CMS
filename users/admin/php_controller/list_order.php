<?php
include("../../../common/config/config.php");

$function_name=trim($_POST['function_name']);
//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="load_order_table"){

	$query = "SELECT * FROM orders";
  	$result = mysqli_query($db, $query);
  	$output="";
  	while($row = mysqli_fetch_array($result)){
 	 	$customers_id=$row["CustID"];
    $pending_amount=$row["PendingAmount"];
    $weight=$row["Weight"];
  		$query_customer = "SELECT * FROM customers WHERE CustID=$customers_id";
  		$result_customer = mysqli_query($db, $query_customer);
  	while($row_customer = mysqli_fetch_array($result_customer)){
	  	$customer_name=$row_customer["Customer"];
	  }	
		$product_id=$row["ProdID"];
	 	$query_product = "SELECT * FROM products WHERE ProdID=$product_id";
  		$result_product = mysqli_query($db, $query_product);
  	while($row_product = mysqli_fetch_array($result_product)){
	  		$product_name=$row_product["Product"];
	  }
		$TypeCode_id=$row["TypeCode"];
	 	$query_type = "SELECT * FROM types WHERE TypeCode=$TypeCode_id";
  		$result_type = mysqli_query($db, $query_type);
  	while($row_type = mysqli_fetch_array($result_type)){
	  	$type_name=$row_type["TypeName"];
	  }

	  $status_code=$row["CurrOrderStatus"];
	 	$query_status = "SELECT * FROM orderstatus WHERE OSID=$status_code";
  		$result_status = mysqli_query($db, $query_status);
  	while($row_status = mysqli_fetch_array($result_status)){
	  	$status_name=$row_status["OSName"];
	  }
  
	$output .='<tr role="row" class="odd"><td class="sorting_1">'.$row["OrdID"].'</td><td>'.$row["Date"].'</td><td>'.$customer_name.'</td><td>'.$product_name.'</td><td>'.$type_name.'</td><td>'.$weight.'</td><td>'.$pending_amount.'</td><td>'.$status_name.'</td><td><a href="#" onClick='."edit_me(".$row["OrdID"].",'modal-lg','orders','OrdID')".'>Edit</a> | <a style="color:red;" href="#" onClick='."delete_me(".$row["OrdID"].",'orders','OrdID','order_list_table','load_order_table')".'>Delete</a></td></tr>';
 }
 echo $output;

}
mysqli_close($db); // Connection Closed*/

 ?>
