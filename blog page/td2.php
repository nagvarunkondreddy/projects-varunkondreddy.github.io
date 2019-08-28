<?php

	session_start();



$name=$_SESSION["identity"];

?>


<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Page 1</title>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style type="text/css">
		
		body{
       background-color: lightblue;

		}
	</style>
</head>
<body>

<h2 class="text-center">blog of

<?php
echo "$name";
?>
</h2>
<br>
<div class="container">
<div class="row">
	<div class="card center" style="width: 100%;height: auto;">
		<img src="https://wallpaper-gallery.net/images/images-of-cars/images-of-cars-10.jpg" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">One Of My Favourite Car</h2>
			<h6 class="card-subtitle">Dec 7,2019</h3>
				<br>
				<?php
				if(isset($_POST['helloworld']))
				{
					$recieve=$_POST['posting'];
					$con=new mysqli('localhost','root','','test');
					$query="INSERT INTO post (posting) VALUES ('$recieve') ";
					mysqli_query($con,$query);
					$query1="SELECT * FROM post ";

					$row=mysqli_query($con,$query1);


					while($result= mysqli_fetch_assoc($row))
						{$row2=$result["posting"];
					$row3=$result["id"];

					?>
					<div  style="border:2px solid grey; font-size: 20px;padding: 5px;">  
						<?php 
						echo "$row3)"." "."$row2<br>";
						?>
						
					</div>
					<br>

					<?php

						
						}
						

					
				
					
				}


				?>
				
					<?php
					if(isset($_POST['number']))
					{
						$num=$_POST['number'];
						$con= new mysqli('localhost','root','','test');
						$querty="DELETE FROM post WHERE id='$num' ";
						mysqli_query($con,$querty);
						$u="SELECT * FROM  post";
						$result=mysqli_query($con,$u);
							error_reporting(E_ERROR | E_PARSE);
						while($row=mysqli_fetch_assoc($result))
						{$row2=$row["posting"];
					$row3=$row["id"];



					?>
					<div style="border:2px solid black; font-size: 20px;padding: 5px;"><?php
						echo "$row3)"." "."$row2<br>";

					?></div>
					<br>
					<?php
						}
					}
					?>


					<?php
					
					if(isset($_POST['submit']))
					{$row2=$_SESSION["superb"];
					error_reporting(E_ERROR | E_PARSE);
		
									  $crane=$_POST['big'];
									$con=new mysqli('localhost','root','','test');
									$querty="UPDATE post SET posting='$crane' WHERE id='$row2' ";
									mysqli_query($con,$querty);
									$u="SELECT * FROM  post";
						$result=mysqli_query($con,$u);
							error_reporting(E_ERROR | E_PARSE);
						while($row=mysqli_fetch_assoc($result))
						{$row3=$row["posting"];
					$row4=$row["id"];


					?>
					<div style="border:2px solid black; font-size: 20px; padding: 5px;">
						<?php
						echo "$row4)"." "."$row3<br>";
						?>
					</div>
					<br>

					<?php

							
						}



					}




					?>


					


			


				<br>
				<div class="row">
					<div class="col-4">
						<form action="td2.php" method="post" >
						
						<input class="btn btn-outline-danger"  name="draco" type="submit" value="ADD POST">
						</form>
					</div>
					<?php
					if(isset($_POST['draco']))
					{
						header("Location:td3.php");
					}


					?>
					

					<div class="col-4">
						
						
			              <button class="btn btn-outline-warning" onclick="dragon()">DELETE POST</button>
			              <form action="td2.php" method="post">
			              	<div style="display: none;margin-top:10px; " id="grand">

						<input type="text" name="number" >
						<input type="submit"  class="btn btn-outline-secondary">
						</div>
						</form>
						
					</div>

					<script type="text/javascript">
						function dragon(){
							var p=document.getElementById('grand');
							p.style.display="block";

						}
					</script>

					<div class="col-4">
						<button class="btn btn-outline-primary" onclick="dracula()">UPDATE POST</button>
						<form action="td4.php" method="post">
			              	<div style="display: none;margin-top:10px; " id="grand1">

						<input type="text" name="number1" >
						<input type="submit"  class="btn btn-outline-secondary">
						</div>
						</form>
						
					</div>
					
				</div>
				<script type="text/javascript">
					function dracula(){
						var t=document.getElementById('grand1');
						t.style.display="block";
					}
				</script>
			
		</div>
		 
	</div>
	<br>




	<br>
	<div class="card">
		
	</div>
	
</div>
</div>




</body>
</html>