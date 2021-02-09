<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'client_masters';
 
// Table's primary key
$primaryKey = 'client_ID';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'client_ID', 'dt' => 0 ),
    array( 'db' => 'company_Name',  'dt' => 1 ),
    array( 'db' => 'address',   'dt' => 2 ),
    array( 'db' => 'tel',   'dt' => 3 ),
    array( 'db' => 'company_Email',   'dt' => 4 ),
    array( 'db' => 'status',   'dt' => 5 ,'formatter' => function ($application_status,$row) {
    	if( $row[5]=='1'){
                return "<span class='badge  bg-success'>Active</span>";
            }else{
            	 return "<span class='badge  bg-danger'>Inactive</span>";

            }
          })
);
 
// SQL server connection information

include("../../../common/config/config_dataTable.php");
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require("../../../common/ssp.class.php");
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>