<?php
include("../../../common/config/config.php");
$user_id=trim($_POST['user_id']);
$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM user_master WHERE `id` ='$user_id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      //  echo "id: " . $row["id"]. " - zone Name: " . $row["zone_name"]. "<br>";
  //array_push($resultArray, $ary['employee_name'],$ary['phone_number']);
   // echo json_encode(implode(',', $resultArray));
      $resultArray[0] = $ary['id'];
      $resultArray[1] = $ary['mobile_number'];
      $resultArray[2] = $ary['email'];
      $resultArray[3] = $ary['first_name'];
      $resultArray[4] = $ary['last_name'];
      $resultArray[5] = $ary['role'];

      
      /*
      $resultArray[6] = $ary['office_number'];
      $resultArray[7] = $ary['email'];
      $resultArray[8] = $ary['firm'];
      $resultArray[9] = $ary['designation'];
      $resultArray[10] = $ary['date_of_arvl'];
      $resultArray[11] = $ary['room_range'];
      $resultArray[12] = $ary['utr_number'];
      $resultArray[13] = $ary['status'];
      $resultArray[14] = $ary['date_of_reg'];
      $resultArray[15] = $ary['room_type'];
      $resultArray[16] = $ary['bank_name'];
*/
    print_r (json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>