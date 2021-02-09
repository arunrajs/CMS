<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM orderstatus WHERE `OSID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['OSID'];
      $resultArray[1] = $ary['OSShortName'];
      $resultArray[2] = $ary['OSName'];
      $resultArray[3] = $ary['OSValue'];
      $resultArray[4] = $ary['Active'];
      print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>