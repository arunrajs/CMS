<?php
include("../../../common/config/config.php");
$id=trim($_POST['id']);


$resultArray=array();
$result = mysqli_query($db,"SELECT * FROM orders WHERE `OrdID` ='$id'" );

if ($result->num_rows > 0) {
  
    // output data of each row
    while($ary = mysqli_fetch_array($result)) {
      $resultArray[0] = $ary['OrdID'];
      $resultArray[1] = $ary['Date'];

      $customer_id = $ary['CustID'];
      $resultArray[22] = $ary['CustID'];

      $query_customer = "SELECT * FROM customers WHERE CustID= $customer_id";
      $result_customer = mysqli_query($db, $query_customer);
       while($row_customer = mysqli_fetch_array($result_customer)){
           $resultArray[2]=$row_customer["Customer"];
        } 

        $product_id = $ary['ProdID'];
          $resultArray[23] = $ary['ProdID'];
      $query_product = "SELECT * FROM products WHERE ProdID= $product_id";
      $result_product = mysqli_query($db, $query_product);
       while($row_product = mysqli_fetch_array($result_product)){
           $resultArray[3]=$row_product["Product"];
        } 

       $type_id = $ary['TypeCode'];
        $resultArray[24] = $ary['TypeCode'];
      $query_type = "SELECT * FROM types WHERE TypeCode= $type_id";
      $result_type = mysqli_query($db, $query_type);
       while($row_type = mysqli_fetch_array($result_type)){
           $resultArray[4]=$row_type["TypeName"];
        } 

      $size_id = $ary['SID'];
       $resultArray[25] = $ary['SID'];
      $query_size = "SELECT * FROM size WHERE SID= $size_id";
      $result_size = mysqli_query($db, $query_size);
       while($row_size = mysqli_fetch_array($result_size)){
           $resultArray[5]=$row_size["SizeName"];
        }  

      
      /*$query_size = "SELECT * FROM order_status_grp WHERE  order_id= $id";
      $result_size = mysqli_query($db, $query_size);
       while($row_size = mysqli_fetch_array($result_size)){
           array_push($resultArray[26], $row['status_id']);

           //=$row_size["status_id"];
        } */

        $namearray = array();

    $query = "SELECT * FROM order_status_grp WHERE order_id = '$id'";
    $result = mysqli_query($db, $query);

    while($row = mysqli_fetch_array($result)) {
        array_push($namearray, $row['status_id']);
    }

    $resultArray[26]=$namearray;
      $resultArray[6] = $ary['Number'];
      $resultArray[7] = $ary['Weight'];
      $resultArray[8] = $ary['PerUnit'];
      $resultArray[9] = $ary['PerRate'];
      $resultArray[10] = $ary['IncludeTax'];
      $resultArray[11] = $ary['Description'];
      $resultArray[12] = $ary['TotalAmount'];
      $resultArray[13] = $ary['AdvanceAmount'];
      $resultArray[14] = $ary['PendingAmount'];
      $resultArray[15] = $ary['CommittedDate'];
      $resultArray[16] = $ary['CurrOrderStatus'];
      $resultArray[17] = $ary['PaymentStatus'];
      $resultArray[18] = $ary['TotalMachineUsage'];
      $resultArray[19] = $ary['TotalProduct'];
      $resultArray[20] = $ary['TotalWastage'];
      $resultArray[21] = $ary['WastagePercentage'];
      $resultArray[22] = $ary['OrderClosed'];
    print_r(json_encode($resultArray));
    }

   
} else {
    echo "0 results";
}

 // Close connection
mysqli_close($db);
?>