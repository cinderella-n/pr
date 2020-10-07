<?php 
	include("connect.php");
    require("connect.php");

    $tb_pr = "tb_pr";
    $sql_pr = "SELECT * FROM $tb_pr WHERE pr_status_approve_2 != '1' ";
    $query_pr = mysqli_query($connect, $sql_pr);
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">วันที่ Date</div>
                <div class="col-md-4">ชื่อผู้ใช้ User</div>
                <div class="col-md-4">ตำแหน่ง Position</div>
            </div>		
        </div>
        <!--List-->
        <div id="header_list" class="cotainer-fluid">
            <div id="header_list" class="row">
                <div class="col-md-1">ลำดับที่ No.</div>
                <div class="col-md-1">วันที่ Date</div>
                <div class="col-md-1">เลขที่ใบขอสั่งซื้อ Purchase No.</div>
                <div class="col-md-1">รายการ Description</div>
                <div class="col-md-1">ผู้ขอ Requester</div>
                <div class="col-md-1">จำนวนเงินประมาณ Total</div>
                <div class="col-md-1">ชื่อผู้ใช้ User</div>
                <div class="col-md-1">แหล่งซื้อ Vendor</div>
                <div class="col-md-2">ตรวจสอบโดย Check by.
                    <div class="col-md">checker 1</div>
                    <div class="col-md">checker 2</div>
                    <div class="col-md">Acc Checker</div>
                    <div class="col-md">Purchase Checker</div>
                </div>
                <div class="col-md-2">อนุมัติโดย Approve by.
                    <div class="col-md">Approve 1 by.</div>
                    <div class="col-md">Approve 2 by.</div>
                    <div class="col-md">ACC Approve by.</div> 
                </div>
            </div><!--id="header_list"-class="row"-->
        </div><!--id="header_list" class="cotainer-fluid"-->

        <?php while($row = mysqli_fetch_array($query_pr)){ ?>
            <div id="detail_list" class="cotainer-fluid">
                <div id="detail_list" class="row">
                    <div class="col-md-1"><?=$row["pr_id"];?></div>
                    <div class="col-md-1"><?=$row["pr_requirement_date"];?></div>
                    <div class="col-md-1"><?=$row["pr_number"];?></div>
                    <div class="col-md-1"><?=$row["pr_description"];?></div>
                    <div class="col-md-1"><?=$row["pr_user_description"];?></div>
                    <div class="col-md-1"><?=$row["pr_total"];?></div>
                    <div class="col-md-1"><?=$row["pr_requester"];?></div>
                    <div class="col-md-1"><?=$row["pr_vendor"];?></div>
                    <div class="col-md-2">ตรวจสอบโดย Check by.
                        <div class="row">checker 1</div>
                        <div class="row"><?=$row["pr_check_1"];?>-<?=$row["pr_status_check_1"];?></div>
                        <div class="row">checker 2</div>
                        <div class="row"><?=$row["pr_check_2"];?>-<?=$row["pr_status_check_2"];?></div>
                        <div class="row">Acc Checker</div>
                        <div class="row"><?=$row["pr_acc_check"];?>-<?=$row["pr_status_acc_check"];?></div>
                        <div class="row">Purchase Checker</div>
                        <div class="row"><?=$row["pr_purchase"];?>-<?=$row["pr_status_purchase"];?></div>
                    </div>
                    <div class="col-md-2">อนุมัติโดย Approve by.
                        <div class="col-md">Approve 1 by.</div>
                        <div class="col-md">Approve 2 by.</div>
                        <div class="col-md">ACC Approve by.</div> 
                    </div>
                </div><!--id="header_list"-class="row"-->
            </div><!--id="header_list" class="cotainer-fluid"-->
        <?php } ?>
    </body>
</html>