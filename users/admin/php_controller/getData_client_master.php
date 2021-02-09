<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM client_master WHERE `CustID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
  
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['CustID'];
      $resultArray[1] = $ary['CreateDate'];
      $resultArray[2] = $ary['Customer'];
      $resultArray[3] = $ary['ShortName'];
      $resultArray[4] = $ary['Address'];
      $resultArray[5] = $ary['MobileNo'];
      $resultArray[6] = $ary['ContactPerson'];
      $resultArray[7] = $ary['Email'];
      $resultArray[8] = $ary['Website'];
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>