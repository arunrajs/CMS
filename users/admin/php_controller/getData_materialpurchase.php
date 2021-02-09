<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array(); 
$result = mysqli_query($db,"SELECT * FROM materialpurchase WHERE `MPID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['MPID'];
      $resultArray[1] = $ary['SPID'];
      $resultArray[2] = $ary['PDate'];
      $resultArray[3] = $ary['MINo'];
      $resultArray[4] = $ary['PQty'];
      $resultArray[5] = $ary['PUnit'];

      $materials_id=$ary['MINo'];
      $query_materials = "SELECT * FROM materials WHERE MINo= $materials_id";
      $result_materials = mysqli_query($db, $query_materials);
       while($row_materials = mysqli_fetch_array($result_materials)){
           $resultArray[11]=$row_materials["MaterialItem"];
        } 

      $suppliers_id=$ary['SPID'];
      $query_suppliers = "SELECT * FROM suppliers WHERE SPID= $suppliers_id";
      $result_suppliers = mysqli_query($db, $query_suppliers);
       while($row_suppliers = mysqli_fetch_array($result_suppliers)){
           $resultArray[12]=$row_suppliers["Supplier"];
        } 

    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>