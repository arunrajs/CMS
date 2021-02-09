<?php
include("../../../common/config/config.php");
$function_name=trim($_POST['function_name']);
$Order_id=trim($_POST['Order_id']);
$Order_date=$_POST['Order_date'];
$Order_customer=trim($_POST['Order_customer']);
$Order_Products=trim($_POST['Order_Products']);
$Order_Type=trim($_POST['Order_Type']);
$Order_Size=trim($_POST['Order_Size']);
$order_number=trim($_POST['order_number']);

$order_per=trim($_POST['order_per']);
$Order_Committed_Date=$_POST['Order_Committed_Date'];
$Order_Description=trim($_POST['Order_Description']);
$order_Total_Amount=trim($_POST['order_Total_Amount']);
$order_Advance_Amount=trim($_POST['order_Advance_Amount']);
$order_Pending_Amount=trim($_POST['order_Pending_Amount']);
//$list_values=trim($_POST['list_values']);

$order_kg=trim($_POST['order_kg']);

$order_per_rate=trim($_POST['order_per_rate']);
$list_status=trim($_POST['list_status']);
$status_list_array=explode(",",$list_status);

if($function_name=="create_new_order"){

		$query = "SELECT * FROM orders WHERE OrdID='$Order_id'";
		$results = mysqli_query($db, $query);
		if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `orders` (`OrdID`, `Date`, `CustID`, `ProdID`, `TypeCode`, `SID`, `Number`, `Weight`, `PerRate`, `PerUnit`, `IncludeTax`, `Description`, `TotalAmount`, `AdvanceAmount`, `PendingAmount`, `CommittedDate`, `CurrOrderStatus`, `PaymentStatus`, `TotalMachineUsage`, `TotalProduct`, `TotalWastage`, `WastagePercentage`, `OrderClosed`) VALUES (NULL, '$Order_date', '$Order_customer', '$Order_Products', '$Order_Type', '$Order_Size', '$order_number', '$order_kg', '$order_per_rate', '$order_per', '1', '$Order_Description', '$order_Total_Amount', '$order_Advance_Amount', '$order_Pending_Amount', '$Order_Committed_Date', '1', '0', '0', '0', '0', '0', '1');");
		$i=0;
		for ($i=0; $i < count($status_list_array); $i++) { 
     			$status_id=$status_list_array[$i];
    			$query = mysqli_query($db,"INSERT INTO `order_status_grp`(`id`, `order_id`, `status_id`) VALUES (null,'$Order_id','$status_id')");
 				}
				echo "0"; //No

				 
		}


}else if($function_name=="update_order"){

$query = mysqli_query($db,"UPDATE `orders` SET `Date`='$Order_date',`CustID`='$Order_customer',`ProdID`='$Order_Products',`TypeCode`='$Order_Type',`SID`='$Order_Size',`Number`='$order_number',`Weight`='$order_kg',`PerRate`='$order_per_rate',`PerUnit`='$order_per',`IncludeTax`='1',`Description`='$Order_Description',`TotalAmount`='$order_Total_Amount',`AdvanceAmount`='$order_Advance_Amount',`PendingAmount`='$order_Pending_Amount',`CommittedDate`='$Order_Committed_Date',`CurrOrderStatus`='1',`PaymentStatus`='0',`TotalMachineUsage`='0',`TotalProduct`='0',`TotalWastage`='0',`WastagePercentage`='0',`OrderClosed`='1' WHERE `OrdID` = '$Order_id'"); 
    
	$query_one = mysqli_query($db,"DELETE FROM `order_status_grp` WHERE order_id = '$Order_id'");
      $i=0;
		for ($i=0; $i < count($status_list_array); $i++) { 
     			$status_id=$status_list_array[$i];
     			$query = mysqli_query($db,"INSERT INTO `order_status_grp`(`id`, `order_id`, `status_id`) VALUES (null,'$Order_id','$status_id')");

 				}
  echo "2"; //Exist 
}
	

?>