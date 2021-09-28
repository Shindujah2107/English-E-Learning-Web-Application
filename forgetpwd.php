<html>
<head>
<meta charset="utf-8">
	<title>English Learning - English Learning Website  </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
	th, td {
		padding:5px;   
	}
	</style>
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
	if(!$strconn)
		echo "Connection failed".mysqli_connect_error();
	else
	{}
	?>

	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Reset Password</h1>
                </div>
            </div>
        </div>
    </header>
	<form method="POST" action="" id="regform">
		<table border=0 align="center">
		
			<tr>
				<td><label>Enter Your User Name :</label></td>
				<td><input type="text" class="form-control" name="UserName" placeholder="User Name"></td>
			</tr>
			<tr>
				<td><label>Enter Your New Password :</label></td>
				<td><input type="password" class="form-control" name="Password" placeholder="Password"></td>
			</tr>
			<tr>
				<td><label>Confirm New Password :</label></td>
				<td><input type="password" class="form-control" name="pass1" placeholder="Confirm Password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block">Reset</button></td>
			</tr>
		</table>
	</form>
	<?php
    $UserName = $Password='';
    
		if(isset($_POST['btn']))
		{
		$UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        
        $query = "select * from user_info where UserName='".$UserName."'";
        $result = mysqli_query($strconn,$query);

        $row = mysqli_fetch_array($result);
         if ($row == 0 ) {

            echo "Error: Entered User Name does not in the Database ";
        } else {
           $sql = "UPDATE user_info SET Password='".$Password."'  WHERE UserName='".$UserName."'";
   
           if ($strconn->query($sql) === TRUE) {
               ?>
               <script type="text/javascript">
                window.location.href="forgrtpwd.php"</script>
               <?php
           } else {
               echo "Error updating record: " . $strconn->error;
           }
        }
    }
           $strconn->close();
           
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>