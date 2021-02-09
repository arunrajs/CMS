<?php
include("../../../common/config/config.php");
$function_name=trim($_POST['function_name']);

if($function_name=="create_new_job"){

		$JobCard_id=trim($_POST['JobCard_id']);
		$JobCard_date=$_POST['JobCard_date'];
		$new_order_Machine_hidden=trim($_POST['new_order_Machine_hidden']);
		$OrdId=trim($_POST['OrdId']);
		$Customer=trim($_POST['Customer']);
		$SLNo=trim($_POST['SLNo']);
		$SID=trim($_POST['Size_hidden']);
		$Size=trim($_POST['Size']);
		$Qty=trim($_POST['Qty']);
		$Unit=trim($_POST['Unit']);
		$TP=trim($_POST['TP']);
		$Colour=trim($_POST['Colour']);
		$Remark=trim($_POST['Remark']);
		//$query = "SELECT * FROM ord_machinejobs WHERE JobCardID='$JobCard_id'";
		//$results = mysqli_query($db, $query);
		//if(mysqli_num_rows($results)==1){
		//	echo "0"; //Exist 
		//}else{
		mysqli_query($db,"INSERT INTO `ord_machinejobs`(`JobCardID`, `MID`, `Date`, `OrdID`, `SlNo`, `SID`, `Qty`, `CLCodeA`, `CLCodeB`, `TPStatus`, `Remarks`) VALUES (NULL,'$new_order_Machine_hidden',DATE('$JobCard_date'),'$OrdId','$SLNo','$SID','$Qty',1,2,'$TP','$Remark')");

		/*$i=0;
		for ($i=0; $i < count($status_list_array); $i++) { 
     			$status_id=$status_list_array[$i];
    			$query = mysqli_query($db,"INSERT INTO `order_status_grp`(`id`, `order_id`, `status_id`) VALUES (null,'$Order_id','$status_id')");
 				}*/
				echo 1; //No

				 
	//	}


}
	

?>