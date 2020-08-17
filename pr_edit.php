<?php 
	include("connect.php");
    require("connect.php");

    session_start();

    $pr_number = $_GET['pr_number'];

    $tb_pr = "tb_pr";
    $sql_pr = "SELECT * FROM $tb_pr WHERE ";
    $query_pr = mysqli_query($connect, $sql_pr);

    $tb_expense = "tb_expense";
    $sql_expense = "SELECT * FROM $tb_expense";
    $query_expense = mysqli_query($connect, $sql_expense);

    $tb_department = "tb_department";
    $sql_department = "SELECT * FROM $tb_department";
    $query_department = mysqli_query($connect, $sql_department);

    $tb_department_1 = "tb_department";
    $sql_department_1 = "SELECT * FROM $tb_department_1";
    $query_department_1 = mysqli_query($connect, $sql_department_1);

    $tb_currency = "tb_currency";
    $sql_currency = "SELECT * FROM $tb_currency";
    $query_currency = mysqli_query($connect, $sql_currency);

    $tb_goods = "tb_goods";
    $sql_goods = "SELECT * FROM $tb_goods";
    $query_goods = mysqli_query($connect, $sql_goods);

    $tb_warehouse = "tb_warehouse";
    $sql_warehouse = "SELECT * FROM $tb_warehouse";
    $query_warehouse = mysqli_query($connect, $sql_warehouse);

    $tb_vendor = "tb_vendor";
    $sql_vendor = "SELECT * FROM $tb_vendor";
    $query_vendor = mysqli_query($connect, $sql_vendor);

    $tb_user = "tb_user";
    $sql_user = "SELECT * FROM $tb_user";
    $query_user = mysqli_query($connect, $sql_user);

    $tb_user2 = "tb_user";
    $sql_user2 = "SELECT * FROM $tb_user2";
    $query_user2 = mysqli_query($connect, $sql_user2);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PR THAILOTTE CO.,LTD.</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\reset.css">
	<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css\pr.css">
</head>
<body>
	<div class="cover">
			<!----------------Purchase Reauest System------------>
		<div class="purchase">
			<div class="inner">
				<a href="index.php">LOTTE</a>
				<a href="pr.php">New User</a>
				<a href="pr.php">Create PR</a>
				<a href="list_pr.php">List PR</a>
				<a href="pr.php">Success PR</a>
				<a href="pr.php">List PO</a>
				<a href="pr.php">Business Plan</a>
			</div>
			<? if ($_SESSION['user_code']="") { ?>
				<div class="login">
					<a href="login.php">login</a>
				</div>
			<? } else {?>
				<div class="login">
					<a href="Login.php">ออกจากระบบ</a>
					<a href="user_page.php">ชื่อผู้ใช้งาน : <?=$_SESSION['user_code']; ?> </a>					
				</div>
		<? } ?>
			<div class="clr"></div>
		</div>
		<!----------------Form-------------->
		<form name="frmpr" method="post" action="r_pr.php">
		<!------header-------->
		<div class="header">
			<div class="inner">
				THAI LOTTE CO.,LTD.<br />
				บริษัท ไทยลอตเต้ จำกัด<br />
				<img src="img\logo-lotte.jpg">
			</div>
			<div class="inner">
				<br>
				ใบขอสั่งซื้อ <br><br>
				Request
			</div>
			<div class="inner">
				เลขที่ใบขอสั่งซื้อ <br/>
				Purchase No.
				<br><br>
				
			</div>	
			<div class="inner">
				ผู้ขอซื้อ
				Requester
				<br><br><br>
				<?=$row_pr["department_code"];?>
			</div>	
			<div class="inner">
				สังกัด
				Department 
			<br><br><br>
				
			</div>
			<div class="inner">
				ประเภท Type PR. <br>
				<input type="radio" id="rdo_typepr" name="rdo_typepr" value="1">
	  			<label for="Premuim">Premuim</label><br>
	  			<input type="radio" id="rdo_typepr" name="rdo_typepr" value="2">
	  			<label for="Fix-Asset-Expense-Admin">Fix Asset-Expense Admin</label><br>
	  			<input type="radio" id="rdo_typepr" name="rdo_typepr" value="3">
	  			<label for="Expense-Sale-and-Marketing">Expense Sale and Marketing</label><br>
	  			<input type="radio" id="rdo_typepr" name="rdo_typepr" value="4">
	  			<label for="Export-Import-FG">Export-Import - FG</label><br>
			</div>			
		</div>
		<div class="clr"></div>
		<!------Description-------->
		<div class="description">
			<div class="inner">
	            รายละเอียด Description <br>
	            <input style="width: 320px;" type="text" id="txtdescription" name="txtdescription">
	        </div>
	        <div class="inner">
	            รหัสค่าใช้จ่าย Expense Code. <br>
	            <select id="slt_expense" name="slt_expense" >
	                    <?php while($row_expense = mysqli_fetch_array($query_expense)){ ?>
	                        <option value="<?=$row_expense['expense_id']?>" >
	                            <?=$row_expense["expense_goods_code"];?>-<?=$row_expense["expense_name_en"];?>
	                        </option>
	                    <?php } ?>
	            </select>
	        </div>
	        <div class="inner">
	            จำนวนที่ต้องการ Unit <br>
	            <input style="width: 40px;" type="text" id="txtunit" name="txtunit">
	        </div>
	        <div class="inner">
	            สกุลเงิน Currency <br>
	            <select id="slt_currency" name="slt_currency" >
	                        <?php while($row_currency = mysqli_fetch_array($query_currency)){ ?>
	                            <option value="<?=$row_currency['expense_id']?>" >
	                                <?=$row_currency["currency_name_en"];?>
	                            </option>
	                        <?php } ?>
	            </select>
	        </div>
	        <div class="inner">
	            จำนวนเงินประมาณ Total <br>
	            <input style="width: 100px;" type="text" id="txttotal" name="txttotal">
	        </div>
	        <div class="inner">
	            วันที่ต้องการ Requirment Date <br>
	            <input style="width: 150px;" type="date" id="txtrequirmentdate" name="txtrequirmentdate">
	        </div>
	        <div class="inner">
	            ชื่อผู้ใช้ User <br>
	            <select id="slt_user2" name="slt_user2" >
	                    <?php while($row_user2 = mysqli_fetch_array($query_user2)){ ?>
	                        <option value="<?=$row_user2['user_id']?>" >
	                            <?=$row_user2["user_email"];?>
	                        </option>
	                    <?php } ?>
	            </select>
	        </div>
		</div>
		<div class="clr"></div>
		<!--------------Vendor-------------->
		<div class="vendor_box">
			แหล่งซื้อ Vendor
			<br><br>
			<select style="width: 98%;" id="slt_vendor" name="slt_vendor" >
					<?php while($row_vendor = mysqli_fetch_array($query_vendor)){ ?>
						<option value="<?=$row_vendor['vendor_id']?>" >
							<?=$row_vendor["vendor_code"];?> 
							<?=$row_vendor["vendor_name"];?>
						</option>
					<?php } ?>
			</select>
		</div>	
		<div class="clr"></div>			
		<!---------------Footer------------->
		<div class="footer">
			<!----------------->
				<div class="inner">รหัสแผนก Department
					<br>
					<select id="slt_department_1" name="slt_department_1" >
						<?php while($row_department_1 = mysqli_fetch_array($query_department_1)){ ?>
							<option value="<?=$row_department_1['department_id']?>" >
								<?=$row_department_1["department_code"];?> <?=$row_department_1["department_name_en"];?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="inner">รหัสประเภทสินค้า Goods Code
				<br>
					<select id="slt_goods" name="slt_goods">
						<?php while($row_goods = mysqli_fetch_array($query_goods)){ ?>
							<option value="<?=$row_goods['goods_code']?>" >
								<?=$row_goods["goods_code"];?> <?=$row_goods["goods_name"];?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="inner">รหัสคลังสินค้า Warehouse Code
				<br>
					<select id="slt_warehouse" name="slt_warehouse" >
						<?php while($row_warehouse = mysqli_fetch_array($query_warehouse)){ ?>
							<option value="<?=$row_warehouse['warehouse_id']?>" >
								<?=$row_warehouse["warehouse_code"];?> <?=$row_warehouse["warehouse_name"];?>
							</option>
						<?php } ?>
					</select>
				</div>
			<!----------------->
					<div class="inner">ตรวจสอบโดย Check 1 by. :
						<input type="text" id="txtcheck1" name="txtcheck1">
					</div>
					<div class="inner">ตรวจสอบโดย Check 2 by. :
						<input type="text" id="txtcheck2" name="txtcheck2">
					</div>
					<div class="inner">ตรวจสอบโดย Check 3 by. :
						<input type="text" id="txtcheck3" name="txtcheck3">
					</div>
					<div class="inner">อนุมัติโดย Approve 1 by. :
						<input type="text" id="txtapprove1" name="txtapprove1">
					</div>
					<div class="inner">อนุมัติโดย Approve 2 by. :
						<input type="text" id="txtapprove2" name="txtapprove2">
					</div>
					<div class="inner">จัดซื้อ Purchase by. :
						<input type="text" id="txtpurchase" name="txtpurchase">
					</div>
				<!----------------->
					<div class="inner">Budget No. :
						<input type="text" id="txtbudgetnumber" name="txtbudgetnumber">
					</div>
					<div class="inner">ACC Check by. :
						<input type="text" id="txtcheckacc" name="txtcheckacc">
					</div>
					<div class="inner">ACC Approve by. :
						<input type="text" id="txtapproveacc" name="txtapproveacc">
					</div>
			</div>
			<div class="clr"></div>
		<!----------------Comment------------------>
			<div class="comment">Remark :
				<input type="text" id="txtremark" name="txtremark">
			</div>
		<div class="clr"></div>
		<!----------------Button------------------>
			<div class="button">
					<input type="submit" name="btcancle" value="Cancle">
					<input type="submit" name="btnok" value="OK">			
			</div>
		</form>
	</div>	
</body>
</html>