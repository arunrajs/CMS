<?php
session_start();
include("../../../common/config/config.php");
$function_name=trim($_POST['function_name']);
//FUNCTION FOR CHECK THE MOBILE NUMBER IS Exist OR NOT.
if($function_name=="country_master_reg"){
	$Country=trim($_POST['Country']);
	$CountryCode=trim($_POST['CountryCode']);
	$query = "SELECT * FROM countries WHERE Country='$Country'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `countries`(`CID`, `Country`, `CountryCode`) VALUES (NULL,'$Country','$CountryCode')");
			echo "0"; //Not

		}
	}if($function_name=="fetch_country_drop"){
		$sql="SELECT * FROM countries";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo "<option value='".$row['CID']."' >".$row['Country']."</option>";
	 	 	//echo  ;
  			}
  		}
  	}
	}if($function_name=="fetch_state_drop"){
		$CID=trim($_POST['CID']);
		$sql="SELECT * FROM states WHERE CID='$CID'";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo "<option value='".$row['STID']."' >".$row['State']."</option>";
  			}
  		}
  	}
	}if($function_name=="fetch_district_drop"){
		$STID=trim($_POST['STID']);
		$sql="SELECT * FROM districts WHERE STID='$STID'";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo "<option value='".$row['DSID']."' >".$row['District']."</option>";
  			}
  		}
  	}
	}if($function_name=="fetch_Order_Frequency_drop"){
		//$OFID=trim($_POST['OFID']);
		$sql="SELECT * FROM orderfrequeny";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo "<option value='".$row['OFID']."' >".$row['OrderFrequeny']."</option>";
  			}
  		}
  	}
	}if($function_name=="state_master_reg"){
	$State=trim($_POST['State']);
	$state_country_drop=trim($_POST['state_country_drop']);
	$query = "SELECT * FROM states WHERE State='$State'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `states`(`STID`, `State`, `CID`) VALUES (NULL,'$State','$state_country_drop')");
			echo "0"; //Not

		}
	}if($function_name=="district_master_reg"){
	$District=trim($_POST['District']);
	$district_reg_state_drop=trim($_POST['district_reg_state_drop']);
	$query = "SELECT * FROM districts WHERE District='$District'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `districts`(`DSID`, `District`, `STID`, `Active`) VALUES (NULL,'$District','$district_reg_state_drop',1)");
			echo "0"; //Not

		}
	}if($function_name=="order_frequency_master_reg"){
	$Name_of_Order_Frequency=trim($_POST['Name_of_Order_Frequency']);
	$Number_of_days=trim($_POST['Number_of_days']);
	$Order_Frequency_status_drop=trim($_POST['Order_Frequency_status_drop']);

	$query = "SELECT * FROM orderfrequeny WHERE OrderFrequeny='$Name_of_Order_Frequency'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `orderfrequeny`(`OFID`, `OrderFrequeny`, `Number_of_days`, `Status`) VALUES (NULL,'$Name_of_Order_Frequency','$Number_of_days','$Order_Frequency_status_drop')");
			echo "0"; //Not

		}
	}if($function_name=="fetch_autoIncrmnt_value"){
	$table=trim($_POST['table']);
	$result_id = mysqli_query($db,"SELECT AUTO_INCREMENT FROM information_schema.tables WHERE TABLE_SCHEMA = 'vectorz_cms' AND  table_name = '$table' ");
    $row = mysqli_fetch_row($result_id);
    $application_number = $row[0];
    echo $application_number ;

	}if($function_name=="orderFrequencyChange"){
		$OFID=trim($_POST['selected_value']);
		$sql="SELECT * FROM orderfrequeny WHERE OFID=$OFID";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo $row['Number_of_days'];
  			}
  		}
  	}
	}if($function_name=="register_new_client"){
		//$client_reg_ID=trim($_POST['client_reg_ID']);
		$client_ID=trim($_POST['client_ID']);
		$company_Name=trim($_POST['company_Name']);
		$address=trim($_POST['address']);
		$state=trim($_POST['state']);
		$tel=trim($_POST['tel']);
		$company_Email=trim($_POST['company_Email']);
		$contact_Person=trim($_POST['contact_Person']);
		$contact_Person_Email=trim($_POST['contact_Person_Email']);
		$contact_Person_Mobile=trim($_POST['contact_Person_Mobile']);
		$GSTN=trim($_POST['GSTN']);
		$client_status_drop=trim($_POST['client_status_drop']);

	
		$query = "SELECT * FROM client_masters WHERE tel='$tel'";
		$query_two = "SELECT * FROM client_masters WHERE company_Email='$company_Email'";
		$results = mysqli_query($db, $query_two);
		$results_two = mysqli_query($db, $query);
			if(mysqli_num_rows($results)==1){
				echo "1"; //Exist 
		}else if(mysqli_num_rows($results_two)==1){

			echo "2"; //Exist 

		}else{
			mysqli_query($db,"INSERT INTO `client_masters`(`client_ID`, `company_Name`, `address`, `state`, `tel`, `company_Email`, `contact_Person`, `contact_Person_Email`, `contact_Person_Mobile`, `GSTN`, `created_date`, `status`) VALUES (NULL,'$company_Name','$address','$state','$tel','$company_Email','$contact_Person','$contact_Person_Email','$contact_Person_Mobile','$GSTN',now(),'$client_status_drop')");
			echo "3"; //Not

		}
	}if($function_name=="update_client"){

		$client_ID=trim($_POST['client_ID']);
		$company_Name=trim($_POST['company_Name']);
		$address=trim($_POST['address']);
		$state=trim($_POST['state']);
		$tel=trim($_POST['tel']);
		$company_Email=trim($_POST['company_Email']);
		$contact_Person=trim($_POST['contact_Person']);
		$contact_Person_Email=trim($_POST['contact_Person_Email']);
		$contact_Person_Mobile=trim($_POST['contact_Person_Mobile']);
		$GSTN=trim($_POST['GSTN']);
		$client_status_drop=trim($_POST['client_status_drop']);

		mysqli_query($db,"UPDATE `client_masters` SET `company_Name`='$company_Name',`address`='$address',`state`='$state',`tel`='$tel',`company_Email`='$company_Email',`contact_Person`='$contact_Person',`contact_Person_Email`='$contact_Person_Email',`contact_Person_Mobile`='$contact_Person_Mobile',`GSTN`='$GSTN',`status`='$$client_status_drop' WHERE `client_ID`='$client_ID'");
			echo "4"; //Not
	
	}if($function_name=="register_new_package"){
		//$client_reg_ID=trim($_POST['client_reg_ID']);
		$package_ID=trim($_POST['package_ID']);
		$package_Name=trim($_POST['package_Name']);
		$disk_Space=trim($_POST['disk_Space']);
		$email_IDs=trim($_POST['email_IDs']);
		$bandwidth=trim($_POST['bandwidth']);
		$database_drop=trim($_POST['database_drop']);
		$cost=trim($_POST['cost']);
		$package_status_drop=trim($_POST['package_status_drop']);
		$query_two = "SELECT * FROM package_master WHERE Package_Name='$package_Name'";
		$results = mysqli_query($db, $query_two);
		if(mysqli_num_rows($results)==1){
				echo "1"; //Exist 
		}else{
			mysqli_query($db,"INSERT INTO `package_master`(`package_id`, `Package_Name`, `Disk_Space`, `Email_IDs`, `Bandwidth`, `Database_status`, `Cost`, `Status`) VALUES (NULL,'$package_Name','$disk_Space','$email_IDs','$bandwidth','$database_drop','$cost','$package_status_drop')");
			echo "3"; //Not

		}
	}if($function_name=="product_master_reg"){
	$product_name=trim($_POST['product_name']);
	$product_Description=trim($_POST['product_Description']);
	$product_status_drop=trim($_POST['product_status_drop']);

	$query = "SELECT * FROM products WHERE Product='$product_name'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `products`(`ProdID`, `Product`, `Description`, `Active`) VALUES (NULL,'$product_name','$product_Description','$product_status_drop')");
			echo "0"; //Not

		}
	}if($function_name=="product_master_updade"){

	$product_id=trim($_POST['product_id']);
	$product_name=trim($_POST['product_name']);
	$product_Description=trim($_POST['product_Description']);
	$product_status_drop=trim($_POST['product_status_drop']);

	mysqli_query($db,"UPDATE `products` SET `Product`='$product_name', `Description`='$product_Description',`Active`='$product_status_drop' WHERE `ProdID`='$product_id'");
			echo "2"; //Not

	}if($function_name=="type_master_reg"){
	$type_name=trim($_POST['type_name']);
	$Type_status_drop=trim($_POST['Type_status_drop']);


	$query = "SELECT * FROM types WHERE TypeName='$type_name'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `types`(`TypeCode`, `TypeName`,`Active`) VALUES (NULL,'$type_name','$Type_status_drop')");
			echo "0"; //Not

		}
	}if($function_name=="type_master_upate"){
	$type_name=trim($_POST['type_name']);
	$type_id=trim($_POST['type_id']);
	$Type_status_drop=trim($_POST['Type_status_drop']);
	mysqli_query($db,"UPDATE `types` SET `TypeName`='$type_name',`Active`='$Type_status_drop' WHERE `TypeCode`='$type_id'");
			echo "2"; //Not

	}if($function_name=="size_master_reg"){
		
	$size_name=trim($_POST['size_name']);
	$size_Height=trim($_POST['size_Height']);
	$size_Weight=trim($_POST['size_Weight']);
	$size_Gage=trim($_POST['size_Gage']);
	$Size_status_drop=trim($_POST['Size_status_drop']);
	$size_unit=trim($_POST['size_unit']);


	$query = "SELECT * FROM size WHERE SizeName='$size_name'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `size`(`SID`, `SizeName`, `Height`, `Weight`, `Gage`, `unit`, `Active`) VALUES (NULL,'$size_name','$size_Height','$size_Weight','$size_Gage','$size_unit','$Size_status_drop')");
			echo "0"; //Not

		}
	}if($function_name=="size_master_update"){

	$size_id=trim($_POST['size_id']);
	$size_name=trim($_POST['size_name']);
	$size_Height=trim($_POST['size_Height']);
	$size_Weight=trim($_POST['size_Weight']);
	$size_Gage=trim($_POST['size_Gage']);
	$Size_status_drop=trim($_POST['Size_status_drop']);
	$size_unit=trim($_POST['size_unit']);

	mysqli_query($db,"UPDATE `size` SET `SizeName`='$size_name',`Height`='$size_Height',`Weight`='$size_Weight',`Gage`='$size_Gage',`unit`='$size_unit',`Active`='$Size_status_drop' WHERE `SID`='$size_id'");
			echo "2"; //Not

	}if($function_name=="unit_master_reg"){

	$Unit_name=trim($_POST['Unit_name']);
	$Unit_status_drop=trim($_POST['Unit_status_drop']);


	$query = "SELECT * FROM units WHERE UnitName='$Unit_name'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `units`(`UnitID`, `UnitName`, `Active`) VALUES (NULL,'$Unit_name','$Unit_status_drop')");

			echo "0"; //Not

		}
	}if($function_name=="unit_master_upate"){

	$Unit_id=trim($_POST['Unit_id']);
	$Unit_name=trim($_POST['Unit_name']);
	$Unit_status_drop=trim($_POST['Unit_status_drop']);


	$query = "SELECT * FROM units WHERE UnitName='$Unit_name'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `units`(`UnitID`, `UnitName`, `Active`) VALUES (NULL,'$Unit_name','$Unit_status_drop')");

			echo "0"; //Not

		}
	}if($function_name=="order_status_master_reg"){

	$OSShortName=trim($_POST['OSShortName']);
	$OSName=trim($_POST['OSName']);
	$OSValue=trim($_POST['OSValue']);
	$Order_Status__status_drop=trim($_POST['Order_Status__status_drop']);
	$query = "SELECT * FROM orderstatus WHERE OSShortName='$OSShortName'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `orderstatus`(`OSID`, `OSShortName`, `OSName`, `OSValue`, `Active`) VALUES (NULL,'$OSShortName','$OSName','$OSValue','$Order_Status__status_drop')");
			echo "0"; //Not

		}
	}if($function_name=="order_status_master_update"){

	$OSID=trim($_POST['OSID']);
	$OSShortName=trim($_POST['OSShortName']);
	$OSName=trim($_POST['OSName']);
	$OSValue=trim($_POST['OSValue']);
	$Order_Status__status_drop=trim($_POST['Order_Status__status_drop']);
	mysqli_query($db,"UPDATE `orderstatus` SET `OSShortName`='$OSShortName',`OSName`='$OSName',`OSValue`='$OSValue',`Active`='$Order_Status__status_drop' WHERE `OSID`=$OSID");
			echo "2"; //Not

		
	}
	if($function_name=="Machine_master_reg"){

	$Machine=trim($_POST['Machine']);
	$MShortName=trim($_POST['MShortName']);
	$CapacityPerShift=trim($_POST['CapacityPerShift']);
	$MPurchDate=$_POST['MPurchDate'];
	$MNextServiceDate=$_POST['MNextServiceDate'];
	$MachineDetals=trim($_POST['MachineDetals']);
	$Machine_status_drop=trim($_POST['Machine_status_drop']);

	$query = "SELECT * FROM machines WHERE Machine='$Machine'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `machines` (`MID`, `Machine`, `MShortName`, `MPurchDate`, `MNextServiceDate`, `MachineDetals`, `CapacityPerShift`, `Active`) VALUES (NULL, '$Machine', '$MShortName', '$MPurchDate', '$MNextServiceDate', '$MachineDetals', '$CapacityPerShift', '$Machine_status_drop')");
			echo "0"; //Not

		}
	}
	if($function_name=="Machine_master_update"){

	$MID=trim($_POST['MID']);
	$Machine=trim($_POST['Machine']);
	$MShortName=trim($_POST['MShortName']);
	$CapacityPerShift=trim($_POST['CapacityPerShift']);
	$MPurchDate=$_POST['MPurchDate'];
	$MNextServiceDate=$_POST['MNextServiceDate'];
	$MachineDetals=trim($_POST['MachineDetals']);
	$Machine_status_drop=trim($_POST['Machine_status_drop']);

	$query = "SELECT * FROM machines WHERE Machine='$Machine'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"UPDATE `machines` SET `Machine`='$Machine',`MShortName`='$MShortName',`MPurchDate`='$MPurchDate',`MNextServiceDate`='$MNextServiceDate',`MachineDetals`='$MachineDetals',`CapacityPerShift`='CapacityPerShift',`Active`='Machine_status_drop' WHERE `MID`='$MID'");
			echo "2"; //Not

		}
	}if($function_name=="colours_master_reg"){

	$Colour=trim($_POST['Colour']);
	$CLShort=trim($_POST['CLShort']);
	$colours_status_drop=trim($_POST['colours_status_drop']);

	$query = "SELECT * FROM colours WHERE Colour='$Colour'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `colours`(`CLCode`, `Colour`, `CLShort`, `Active`) VALUES (NULL,'$Colour','$CLShort','$colours_status_drop')");
			echo "0"; //Not
		}
	}
if($function_name=="Material_master_reg"){

	$MatCategory=trim($_POST['MatCategory']);
	$MatCatShort=trim($_POST['MatCatShort']);
	$MinStockLevel=trim($_POST['MinStockLevel']);
	$MaxStockLevel=trim($_POST['MaxStockLevel']);
	$StockUnit=$_POST['StockUnit'];
	$MatType=trim($_POST['MatType']);
	$Mat_status_drop=trim($_POST['Mat_status_drop']);

	$query = "SELECT * FROM matcategories WHERE MatCategory='$MatCategory'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `matcategories` (`MatCatID`, `MatCategory`, `MatCatShort`, `MinStockLevel`, `MaxStockLevel`, `StockUnit`, `MatType`, `Active`) VALUES (NULL, '$MatCategory', '$MatCatShort', '$MinStockLevel', '$MaxStockLevel', '$StockUnit', '$MatType', '$Mat_status_drop')");


			echo "0"; //Not

		}
	}
if($function_name=="Material_main_master_reg"){

	$MaterialItem=trim($_POST['MaterialItem']);
	$MatCatShort=trim($_POST['MatCatShort']);
	$MatCatID=trim($_POST['MatCatID']);
	$Unit=trim($_POST['Unit']);
	$Mat_status_drop=trim($_POST['Mat_status_drop']);


	$query = "SELECT * FROM materials WHERE MaterialItem='$MaterialItem'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `materials`(`MINo`, `MaterialItem`, `MatShortName`, `MatCatID`, `Unit`, `Active`) VALUES (NULL,'$MaterialItem','$MatCatShort','$MatCatID','$Unit','$Mat_status_drop')");
				echo "0"; //Not

		}
	}if($function_name=="purchase_main_master_reg"){

	$PurchaseID=trim($_POST['PurchaseID']);
	$supplier_purchase_Master=trim($_POST['supplier_purchase_Master']);
	$Material_purchase_Master=trim($_POST['Material_purchase_Master']);
	$Date_purchase_Master=$_POST['Date_purchase_Master'];
	$Purchase_Unit_purchase_Master=trim($_POST['Purchase_Unit_purchase_Master']);
	$Purchase_Qty_purchase_Master=trim($_POST['Purchase_Qty_purchase_Master']);


	$query = "SELECT * FROM materialpurchase WHERE MPID='$PurchaseID'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `materialpurchase`(`MPID`, `SPID`, `PDate`, `MINo`, `PQty`, `PUnit`) VALUES (NULL,$supplier_purchase_Master,DATE('$Date_purchase_Master'),'$Material_purchase_Master','$Purchase_Qty_purchase_Master','$Purchase_Unit_purchase_Master')");
				echo "0"; //Not

		}
	}if($function_name=="purchase_main_master_update"){

	$PurchaseID=trim($_POST['PurchaseID']);
	$supplier_purchase_Master=trim($_POST['supplier_purchase_Master']);
	$Material_purchase_Master=trim($_POST['Material_purchase_Master']);
	$Date_purchase_Master=$_POST['Date_purchase_Master'];
	$Purchase_Unit_purchase_Master=$_POST['Purchase_Unit_purchase_Master'];
	$Purchase_Qty_purchase_Master=$_POST['Purchase_Qty_purchase_Master'];

	mysqli_query($db,"UPDATE `materialpurchase` SET `SPID`='$supplier_purchase_Master',`PDate`=DATE('$Date_purchase_Master'),`MINo`='$Material_purchase_Master',`PQty`='$Purchase_Qty_purchase_Master',`PUnit`='$Purchase_Unit_purchase_Master' WHERE `MPID`='$PurchaseID'");
	
	echo "2"; //Not

		
	}if($function_name=="Suppliers_main_master_reg"){

	$Supplier=trim($_POST['Supplier']);
	$SupShortName=trim($_POST['SupShortName']);
	$SupAddress=trim($_POST['SupAddress']);
	$SPDistrict=trim($_POST['SPDistrict']);
	$SPState=trim($_POST['SPState']);
	$SPCountry=trim($_POST['SPCountry']);
	$SPPin=trim($_POST['SPPin']);
	$SPContactNo=trim($_POST['SPContactNo']);
	$SPEmail=trim($_POST['SPEmail']);
	$SPMobile=trim($_POST['SPMobile']);
	$SPGST=trim($_POST['SPGST']);
	$Mat_status_drop=trim($_POST['Mat_status_drop']);

	$query = "SELECT * FROM suppliers WHERE Supplier='$Supplier'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `suppliers`(`SPID`, `Supplier`, `SupShortName`, `SupAddress`, `SPDistrict`, `SPState`, `SPCountry`, `SPPin`, `SPContactNo`, `SPEmail`, `SPMobile`, `SPGST`, `Active`) VALUES (NULL,'$Supplier','$SupShortName','$SupAddress','$SPDistrict','$SPState','$SPCountry','$SPPin','$SPContactNo','$SPEmail','$SPMobile','$SPGST','$Mat_status_drop')");
				echo "0"; //No
		}
	}if($function_name=="Employees_main_master_reg"){

	$EName=trim($_POST['EName']);
	$EShortName=trim($_POST['EShortName']);
	$EDesigID=trim($_POST['EDesigID']);
	$EDOB=trim($_POST['EDOB']);
	$EAddress=trim($_POST['EAddress']);
	$EMobile=trim($_POST['EMobile']);
	$EEmail=trim($_POST['EEmail']);
	$UserName=trim($_POST['UserName']);
	$Password=trim($_POST['Password']);
	$Password=md5($Password);
	$EDOJ=trim($_POST['EDOJ']);
	$Mat_status_drop=trim($_POST['Mat_status_drop']);
	

	$query = "SELECT * FROM employees WHERE EMobile='$EMobile'";
	$results = mysqli_query($db, $query);
	if(mysqli_num_rows($results)==1){
			echo "1"; //Exist 
		}else{
		mysqli_query($db,"INSERT INTO `employees`(`EmpID`, `EName`, `EShortName`, `EDesigID`, `EDOB`, `EAddress`, `EMobile`, `EEmail`, `EDOJ`, `UserName`, `Password`, `Active`) VALUES (NULL,'$EName','$EShortName','$EDesigID','$EDOB','$EAddress','$EMobile','$EEmail','$EDOJ','$UserName','$Password','$Mat_status_drop')");
				echo "0"; //No
		}
	}if($function_name=="loadStatus_on_modal"){

	$query = "SELECT * FROM orderstatus WHERE Active=1 ORDER BY OSValue ASC" ;
  $result = mysqli_query($db, $query);
  $output="";
  while($row = mysqli_fetch_array($result))
  {
	$output .='<div class="col-md-4"><div class="custom-control custom-checkbox"><input class="custom-control-input status_grp" type="checkbox"  name="status_list" id="'.$row["OSID"].'" value="'.$row["OSID"].'"><label for="'.$row["OSID"].'" class="custom-control-label normal_fontSize">'.$row["OSName"].'</label></div></div>';
 }
 echo $output;

	}if($function_name=="fetch_Order_unit_drop"){
		//$OFID=trim($_POST['OFID']);
		$sql="SELECT * FROM units";
  	if($result = mysqli_query($db, $sql)){
  		if(mysqli_num_rows($result) > 0){
  			while($row = mysqli_fetch_array($result)){
  				echo "<option value='".$row['UnitID']."' >".$row['UnitName']."</option>";
  			}
  		}
  	}
	}if($function_name=="delete_me"){
	$table=trim($_POST['table']);
	$id=trim($_POST['id']);
	$key=trim($_POST['key']);
	// Check record exists
  $checkRecord = mysqli_query($db,"SELECT * FROM $table WHERE $key=".$id);
  $totalrows = mysqli_num_rows($checkRecord);
  if($totalrows > 0){
  	 $query = "DELETE FROM $table WHERE $key=".$id;
    mysqli_query($db,$query);
    echo 1;
    exit;

  }else{
    echo 0;
    exit;
  }

		
	}
mysqli_close($db); // Connection Closed*/
?>
