


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
	<div class="container">
		<form action="td2.php" method="post" class="form-group" style="margin-top:50px;"> 
		<textarea class="form-control" name="big">
		<?php
			session_start();
	
							if(isset($_POST['number1']))
				{
					
					$super=$_POST['number1'];
					$_SESSION["superb"]=$super;
					$con= new mysqli('localhost','root','','test');
					$query="SELECT posting FROM post WHERE id='$super'";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_array($result);
					 $row1=$row['posting'];
							 echo "$row1";
				}
			
			?>


			<?php
	
	
							if(isset($_POST['number2']))
				{
					
					$super=$_POST['number2'];
					$_SESSION["superb"]=$super;
					$con= new mysqli('localhost','root','','test');
					$query="SELECT posting FROM post1 WHERE id='$super'";
					$result=mysqli_query($con,$query);
					$row=mysqli_fetch_array($result);
					 $row1=$row['posting'];
							 echo "$row1";
				}
			
			?>
			
		</textarea>

		<input class="btn btn-outline-primary" style="margin-left:500px;margin-top:15px;" type="submit" name="submit" value="UPDATE">
		</form>
	</div>

</body>
</html>

