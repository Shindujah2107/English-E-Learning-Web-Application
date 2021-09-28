<?php


$conn=new mysqli('localhost','root','','project') or die(mysqli_error());
 if(count($_POST)>0){
    $UserName=$_POST["UserName"];
  $crpass=$_POST["cpassword"];
  $nwpass=$_POST["npassword"];
  $cnpass=$_POST["cfpassword"];
  
  
  $result = mysqli_query($conn, "SELECT Password FROM user_info WHERE UserName=$UserName");
  
  if (!$result) {
    echo "The UserName you entered doesnot exixt";
  }
  else if($crpass!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
    
    if($nwpass==$cnpass){
       $sql=mysqli_query($conn,"UPDATE user_info SET Password='$nwpass' where UserName='$UserName'");  
  }  
   if($sql)
        {
        echo "<script>alert('Password Changed Sucessfully'); window.location='change_pwd.php'</script>";
        }
       else
        {
       echo "<script>alert('Your new and Retype Password is not match'); window.location='change_pwd.php'</script>";
       }
     
 }
 ?> <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Web Template </title>
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
		
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Change Password</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class = "col-10">
	      <table align = "center" cellpadding="5">
	   	    <form method = "POST" action="" method="post" onSubmit="return validatePassword()">

	   		  <th style = "font-size:25px; color: #FFFAF0;">Change Password</th>

              <tr>
              	<td><label for = "u_name" style = "font-size:25px; color:#F5FFFA;">User Name</label></td>
			    <td><input type="text" name="UserName" placeholder="Enter username you used to login" required></td>
			  </tr> 

			  <tr>
			  	<td><label for = "cpassword" style = "font-size:25px; color:#F5FFFA;">Current Password</label></td>
				<td><input type="password" name="cpassword" placeholder="Enter Current Password..." required></td>
			  </tr>
      
       		  <tr>
       		  	<td><label for = "npassword" style = "font-size:25px; color:#F5FFFA;">New Password</label></td>
			  <td><input type="password" name="npassword" placeholder="Enter New Password..." required></td>
			</tr> 

        	  <tr>
        	  	<td><label for = "cfpassword" style = "font-size:25px; color:#F5FFFA;">Confirm Password</label></td>
			    <td><input type="password" name="cfpassword" placeholder="Enter Confirm Password..." required></td>
			  </tr>

		  </table>
          <br>
               <div class = "add_clear"><button type="submit" name="change" class="btn btn-primary" style="font-size: 18px; width: 20%;" value="Change Password"><b>Change</b></button>
               </div>
               <br>
			   <div class = "add_clear"><button type="submit" name="reset" class="btn btn-primary" style="font-size: 18px; width: 20%;"><b>Reset</b></button>
			   </div>

		  
		   </form>
		  </table>
        </div>

   <script type="text/javascript">
function validatePassword() {
var cpassword,npassword,cpassword,output = true;

cpassword = document.frmChange.cpassword;
npassword = document.frmChange.npassword;
cpassword = document.frmChange.confirmpassword;

if(!cpassword.value) {
cpassword.focus();
document.getElementById("cpassword").innerHTML = "required";
output = false;
}
else if(!npassword.value) {
npassword.focus();
document.getElementById("npassword").innerHTML = "required";
output = false;
}
else if(!cpassword.value) {
cpassword.focus();
document.getElementById("cpassword").innerHTML = "required";
output = false;
}
if(npassword.value != cpassword.value) {
npassword.value="";
cpassword.value="";
npassword.focus();
document.getElementById("cpassword").innerHTML = "not same";
output = false;
}   
return output;
}
</script>
	<?php
		include "footer.php";
	?>
</body>
</html>