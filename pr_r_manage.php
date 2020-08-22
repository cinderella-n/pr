<?php 
	if( isset($_POST['btnadd']) ) {
		header("location:pr_edit.php");
		/*--เรียกว่า Redirect--*/
	} elseif( isset($_POST['btnedit']) ) {
		$str_id = $_POST['hdid'];
	 	header("location:edit.php?id=" . $str_id);
	} elseif( isset($_POST['btndelete']) ) {
		$str_id = $_POST['hdid'];
	 	header("location:delete.php?id=" . $str_id);
	} elseif( isset($_POST['btnsearch']) ) {
		$str_kw = $_POST['txtkw'];
		$str_qs = "";
		if(strlen($str_kw) > 0) {
			$str_qs = "?kw=" . $str_kw; 
		}
	 	header("location:manage.php" . $str_qs);
	} else {
		header("location:manage.php");
	}
	exit();

 ?>