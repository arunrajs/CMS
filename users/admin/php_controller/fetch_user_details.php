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

    print_r (json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>