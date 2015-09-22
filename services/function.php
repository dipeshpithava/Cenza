<?php
include_once("../wp-config.php");
if(isset($_GET["action"]) && $_GET["action"] == "home"){
	// name, emailid message
	try {
		$conn = new PDO('mysql:host=localhost;dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$params = array(@$_POST["txt_name"], @$_POST["txt_email_id"], @$_POST["txt_message"]);
    	$stmt = $conn->prepare("insert into home_form (name, email_id, message) values(?,?,?);");
    	$res = $stmt->execute($params);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
if(isset($_GET["action"]) && $_GET["action"] == "contact"){
	// name, org, phone, emailid, country, pref contact, project details, req info
	try {
		$conn = new PDO('mysql:host=localhost;dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$params = array(@$_POST["txt_name"], @$_POST["txt_org"], @$_POST["txt_phone"], @$_POST["txt_email_id"], @$_POST["txt_pref_contact"], @$_POST["txt_project_details"], @$_POST["txt_country"], @$_POST["txt_req_info"]);
    	$stmt = $conn->prepare("insert into contact_form (name, org, phone, email_id, pref_contact, project_details, country, req_info) values(?,?,?,?,?,?,?,?);");
    	$res = $stmt->execute($params);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>