<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM customers WHERE `CustID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['CustID'];
      $resultArray[1] = $ary['CreateDate'];
      $resultArray[2] = $ary['Customer'];
      $resultArray[3] = $ary['ShortName'];
      $resultArray[4] = $ary['Address'];
      $resultArray[5] = $ary['StateID'];
      $resultArray[6] = $ary['DistrictID'];
      $resultArray[7] = $ary['City'];
      $resultArray[8] = $ary['PinCode'];
      $resultArray[9] = $ary['CountryCode'];
      $resultArray[10] = $ary['ContactNo'];
      $resultArray[11] = $ary['MobileNo'];
      $resultArray[12] = $ary['ContactPerson'];
      $resultArray[13] = $ary['Email'];
      $resultArray[14] = $ary['Website'];
      $resultArray[15] = $ary['OrderFrequency'];
      $resultArray[16] = $ary['NextExpOrdDate'];
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>