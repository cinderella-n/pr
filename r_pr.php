<?php 
	include("connect.php");
    require("connect.php");

	$str_prnumber =  date("yym") . $_POST['txtprnumber'];
	$str_requester = $_POST['slt_requester'];
	$str_department = $_POST['slt_department'];
	$str_typpr = $_POST['rdo_typepr'];
	$str_description = $_POST['txtdescription'];
	$str_expense = $_POST['slt_expense'];
	$str_unit = $_POST['txtunit'];
	$str_currency = $_POST['slt_currency'];
	$str_total = $_POST['txttotal'];
	$str_requirmentdate = $_POST['txtrequirmentdate'];
	$str_user2 = $_POST['slt_user2'];
	$str_vendor = $_POST['slt_vendor'];
	$str_department_1 = $_POST['slt_department_1'];
	$str_goods = $_POST['slt_goods'];
	$str_warehouse = $_POST['slt_warehouse'];
	$str_budgetnumber = $_POST['txtbudgetnumber'];
	$str_remark = $_POST['txtremark']; 

	switch ($str_department) {
	 	case '6199':
	 		$check1 = "41";
	 		break;
	 	case '699':
	 		$check1 = "41";
	 		break;
	 	case '729':
	 		$check1 = "52";
	 		break;
	 	case '920':
	 		$check1 = "3";
	 		break;
	 	case '910':
	 		$check1 = "10";
	 		break;
	 	case '930':
	 		$check1 = "10";
	 		break;
	 	case '940':
	 		$check1 = "20";
	 		break;
	 	case '970':
	 		$check1 = "29";
	 		break;
	 	case '950':
	 		$check1 = "31";
	 		break;
	 	case '990':
	 		$check1 = "45";
	 		break;
	 	case '960':
	 		$check1 = "47";
	 		break;
	 	default:
	 		break;
	 } 
	 switch ($str_typpr) {
	 	case '1':
	 		$check_purchase = "45";
	 		break;
	 	case '2':
	 		$check_purchase = "11";
	 		break;
	 	case '3':
	 		$check_purchase = "43";
	 		break;
	 	case '4':
	 		$check_purchase = "59";
	 		break;
	 	default:
	 		break;
	 }
	 switch ($total) {
	 	case '<=20000':
	 		$approve1="2";
	 		$approve2="0";
	 		break;
	 	case '>20000 and <40000':
	 		$approve1="0";
	 		$approve2="1";
	 		break;
	 	
	 	default:
	 		$approve1="2";
	 		$approve2="1";
	 		break;
	 }



	$str_sql = "insert into tb_pr(pr_number,pr_type,pr_description,pr_unit,pr_total,pr_requirement_date,pr_check_1,pr_check_2,pr_check_3,pr_approve_1,pr_approve_2,pr_purchase,pr_budget_number,pr_acc_check,pr_acc_approve,pr_remark) values (";
	$str_sql .= "'" . $str_prnumber . "',";
	$str_sql .= "'" . $str_typpr . "',";
	$str_sql .= "'" . $str_description . "',";
	$str_sql .= "'" . $str_unit . "',";
	$str_sql .= "'" . $str_total . "',";
	$str_sql .= "'" . $str_requirmentdate . "',";
	$str_sql .= "'" . $str_check1 . "',";
	$str_sql .= "'" . $str_check2 . "',";
	$str_sql .= "'" . $str_check3 . "',";
	$str_sql .= "'" . $str_approve1 . "',";
	$str_sql .= "'" . $str_approve2 . "',";
	$str_sql .= "'" . $str_purchase . "',";
	$str_sql .= "'" . $str_budgetnumber . "',";
	$str_sql .= "'" . $str_checkacc . "',";
	$str_sql .= "'" . $str_approveacc . "',";
	$str_sql .= "'" . $str_remark . "')";

	if( mysqli_query($connect,$str_sql) ) {
			header("location: list_pr.php");
			exit();
		} else {
			echo "Error ! : " . $str_sql;
		}
 ?>