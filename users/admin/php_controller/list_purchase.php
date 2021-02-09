<?php
include("../../../common/config/config.php");


$function_name=trim($_POST['function_name']);
//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="load_purchase_table"){

	$query = "SELECT * FROM materialpurchase";
  	$result = mysqli_query($db, $query);
  	$output="";
  	while($row = mysqli_fetch_array($result)){
 	 	$MINo=$row["MINo"];
  		$query_materials = "SELECT * FROM materials WHERE MINo=$MINo";
  		$result_materials = mysqli_query($db, $query_materials);
  	while($row_materials = mysqli_fetch_array($result_materials)){
	  	$materials_name=$row_materials["MaterialItem"];
	  }	
		$SPID=$row["SPID"];
	 	$query_suppliers = "SELECT * FROM suppliers WHERE SPID=$SPID";
  		$result_suppliers = mysqli_query($db, $query_suppliers);
  		while($row_suppliers = mysqli_fetch_array($result_suppliers)){
	  		$suppliers_name=$row_suppliers["Supplier"];
	  }

	$output .='<tr role="row" class="odd"><td class="sorting_1">'.$row["MPID"].'</td><td>'.$materials_name.'</td><td>'.$suppliers_name.'</td><td>'.$row["PDate"].'</td><td>'.$row["PQty"].'</td><td>'.$row["PUnit"].'</td><td><i class="fas fa-edit"></i><a href="#" onClick='."edit_me(".$row["MPID"].",'edit_purchase_modal','materialpurchase','MPID')".'>Edit</a> | <a style="color:red;" href="#" onClick='."delete_me(".$row["MPID"].",'materialpurchase','MPID','Machine_list_table','load_purchase_table')".'>Delete</a></td></tr>';
 }
 echo $output;

}
mysqli_close($db); // Connection Closed*/

 ?>
