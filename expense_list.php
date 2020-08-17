<?php
    include("connect.php");
    require("connect.php");
    
    $tablename = "tb_expense";
    $sql = "SELECT * FROM $tablename";
    $query = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>pr_table</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/expense_tb.css">
</head>
<body>
    <div class="divcover header">
        <div class="inner-wrapper">
            <table>
                <tr>
                    <td>ลำดับที่</td>
                    <td>รหัสค่าใช้จ่าย</td>
                    <td>ชื่อค่าใช้จ่าย</td>
                </tr>
                <?php while($row = mysqli_fetch_array($query)){ ?>
                <tr>
                    <th><?=$row["id_expense"];?></th>
                    <th><?=$row["sale_ac_code_expense"];?></th>
                    <th><?=$row["goods_code_expense"];?></th>
                    <th><?=$row["name_en_expense"];?></th>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>