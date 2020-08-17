<!DOCTYPE html>
<html>
<head>
	<title>PR Purchase Order System</title>
	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\pr_bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css\pr.css">
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
	<!--flow-->
	<div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-3">
            <div>
                <a href="pr.php">Purchase Request</a>
            </div>
            <div>
                <img src="img\down-arrow.gif">
            </div>
            <div>
                <a href="list_pr.php">Check by. Request Magnager</a>
            </div>
            <div>
                <img src="img\down-arrow.gif">
            </div>
            <div>
                <a href="list_pr.php">Check by. Purchase</a>
            </div>
            <div>
                <img src="img\down-arrow.gif">
            </div>
            <div>
                <a href="list_pr.php">approve by. Director</a>
            </div>
            <div>
                <img src="img\down-arrow.gif">
            </div>
            <div>
                <a href="list_pr.php">approve by. Mnagement Director</a>
            </div>
        </div><!--col-->
        <div class="col-md-4"></div>	
	</div><!--class="row"-->
</body>
</html>