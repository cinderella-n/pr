<?php 
	include("connect.php");
    require("connect.php");

    $tb_pr = "tb_pr";
    $sql_pr = "SELECT * FROM $tb_pr WHERE pr_statusapproved1 != '1' ";
    $query_pr = $result = $conn->query($sql_pr);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>list PR THAILOTTE CO., LTD.</title>
	 
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\pr_bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css\pr_list.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>
	<!--navbar-->
	<div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mymenu-content"></button>
                <a class="navbar-brand" href="index.php"><img src="img\logo-lotte.jpg" alt="img\logo-lotte.jpg"></a>
            </div /*--navbar-header--*/>
            <div class="collapse navbar-collapse" id="mymenu-content">
                <ul class="nav navbar-nav">
                    <li ><a href="user_form.php">User</a></li>
                    <li ><a href="pr.php">Create-PR</a></li>
                    <li ><a href="pr_list.php">PR-List</a></li>
                    <li><a href="po_list.php">PO-List</a></li>
                    <li><a href="po_success.php">PO-Success</a></li>
                    <li><a href="business_plan.php">Business-Plan</a></li>
                </ul /*--nav-navbar-nav--*/>
            </div /*--collapse-navbar-collapse--*/>
        </div /*--container-fluid--*/>
    </div /*--navbar-navbar-default--*/>
	<div class="container">
		<div class="row">
			<div class="col-md-4">วันที่ Date</div>
			<div class="col-md-4">ชื่อผู้ใช้ User</div>
			<div class="col-md-4">ตำแหน่ง Position</div>
		</div>		
	</div>
	<!--List-->
	<table>
		<tr>
			<th>ลำดับที่ No.</th>
			<th>วันที่ Date</th>
			<th>เลขที่ใบขอสั่งซื้อ Purchase No.</th>
			<th>รายการ Description</th>
			<th>ผู้ขอ Requester</th>			
			<th>จำนวนเงินประมาณ Total</th>
			<th>ชื่อผู้ใช้ User</th>
			<th>แหล่งซื้อ Vendor</th>
			<th>ตรวจสอบโดย Check by.</th>
			<th>ตรวจสอบโดย Check by.</th>
			<th>ตรวจสอบโดย ACC Check by.</th>
			<th>ตรวจสอบโดย Purchase Check by.</th>
			<th>อนุมัติโดย ACC Approve by.</th>
			<th>อนุมัติโดย Approve by.</th>
			<th>อนุมัติโดย Approve by.</th>
		</tr>
		<?php while($row = mysqli_fetch_array($query_pr)){ ?>
		<tr>
			<!--ลำดับที่ No.-->
			<td><?=$row["pr_id"];?></td>
			<!--วันที่ Date-->
			<td><?=$row["pr_requirement_date"];?></td>
			<!--เลขที่ใบขอสั่งซื้อ Purchase No.-->
			<td><a href="pr_edit.php"><?=$row["pr_number"];?></a></td>
			<!--รายการ Description-->
			<td><?=$row["pr_description"];?></td>
			<!--ผู้ขอ Requester-->
			<td><?=$row["pr_user_description"];?></td>
			<!--จำนวนเงินประมาณ Total-->
			<td><?=$row["pr_total"];?></td>	
			<!--ชื่อผู้ใช้ User-->		
			<td><?=$row["pr_requester"];?></td>
			<!--แหล่งซื้อ Vendor-->
			<td><?=$row["pr_budget_department"];?></td>
			<!--ตรวจสอบโดย Check 1 by.-->
			<td>
				<?=$row["pr_check_1"];?><br>
				<?=$row["pr_status_check_1"];?>
			</td>
			<!--ตรวจสอบโดย Check 2 by.-->
			<td>
				<?=$row["pr_check_2"];?><br>
				<?=$row["pr_status_check_2"];?>
			</td>
			<!--ตรวจสอบโดย ACC Check 3 by.-->
			<td>
				<?=$row["pr_acc_check"];?><br>
				<?=$row["pr_status_acc_check"];?>
			</td>
			<!--ตรวจสอบโดย Purchase by.-->
			<td>
				<?=$row["pr_purchase"];?><br>
				<?=$row["pr_status_purchase"];?>
			</td>
			<!--อนุมัติโดย ACC Approve 1 by.-->
			<td>
				<?=$row["pr_acc_approve"];?><br>
				<?=$row["pr_status_acc_approve"];?>
			</td>
			<!--อนุมัติโดย Approve 2 by.-->
			<td>
				<?=$row["pr_approve_1"];?><br>
				<?=$row["pr_status_approve_1"];?>
			</td>
			<!--อนุมัติโดย Approve 3 by.-->
			<td>
				<?=$row["pr_approve_2"];?><br>
				<?=$row["pr_status_approve_2"];?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>