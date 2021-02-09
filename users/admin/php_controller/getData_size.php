<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM size WHERE `SID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['SID'];
      $resultArray[1] = $ary['SizeName'];
      $resultArray[2] = $ary['Height'];
      $resultArray[3] = $ary['Weight'];
      $resultArray[4] = $ary['Gage'];
      $resultArray[5] = $ary['Active'];
      $resultArray[6] = $ary['unit'];
      print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>