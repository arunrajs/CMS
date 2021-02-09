<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM machines WHERE `MID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['MID'];
      $resultArray[1] = $ary['Machine'];
      $resultArray[2] = $ary['MShortName'];
      $resultArray[3] = $ary['MPurchDate'];
      $resultArray[4] = $ary['MNextServiceDate'];
      $resultArray[5] = $ary['MachineDetals'];
      $resultArray[6] = $ary['CapacityPerShift'];
      $resultArray[7] = $ary['Active'];
      print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>