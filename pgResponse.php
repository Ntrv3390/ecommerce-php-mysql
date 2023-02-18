<?php
require('connection.inc.php');
require('functions.inc.php');
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");
$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";
$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); 
$order_my_id=$_POST['ORDERID'];

if($isValidChecksum == "TRUE") {
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		$sql_success_order=mysqli_query($con,"update `order` set `payment_status`='success' where txnid='$order_my_id'");
		$sql_update_stock = mysqli_query($con,"select * from `order_detail` where order_txn_id='$order_my_id'");
		$order_qty = mysqli_fetch_array($sql_update_stock);
		$actual_qty = mysqli_query($con,"select * from `product`");
		$ac_qty = mysqli_fetch_array($actual_qty);
		$update_stock = $ac_qty['in_stock'] - $order_qty['qty'];
		mysqli_query($con,"update `product` set `in_stock`='$update_stock'");
    	sentInvoice($con,$order_my_id);
        //sentInvoiceAdmin($con,$order_my_id);
		header('location:thank_you');
	}
	else {
		echo "fail";
		$sql_fail_order=mysqli_query($con,"delete from `order` where txnid='$order_my_id'");
		$sql_fail=mysqli_query($con,"delete from `order_detail` where order_txn_id='$order_my_id'");
		header('location:fail_payment');
	}
}
	else {
		echo "fail";
		$sql_fail_order=mysqli_query($con,"delete from `order` where txnid='$order_my_id'");
		$sql_fail=mysqli_query($con,"delete from `order_detail` where order_txn_id='$order_my_id'");
		header('location:fail_payment');
	}


?>