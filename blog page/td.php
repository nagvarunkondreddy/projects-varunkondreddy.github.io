

<!DOCTYPE html>
<html>
<head>
	<title>Blog Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="td1.css">
</head>
<body style="background-image: linear-gradient(lightblue,blue);height: 750px;" >
	<main style="">
	<div class="row" style="width: 100%;">
		<div class="col-6" style="">
			<div class="card tree" style="">
		
		<div class="card-body" style="">
			<h2 class="card-title text-center"> Sign In</h2>
			<br>
	<form class="form-group" action="td.php" style=""  method="post">
		<input type="text" name="nam" class="form-control" placeholder="Enter Your Username:">
		<br>

		<input type="password" name="pass" class="form-control"  placeholder="Enter Your Pasword:">
		<br>
		
		<input type="submit"  class="form-control" value="Submit">
		<br>
		
	
		
	</form>


	<?php
	session_start();
if(isset($_POST['nam']))
{$name=$_POST['nam'];
$pass=$_POST['pass'];
$_SESSION["identity"]=$name;

$con= new mysqli("localhost","root","","varun");
$query="SELECT * FROM varunk WHERE name='$name'";
$pre=mysqli_query($con,$query);
if(mysqli_num_rows($pre)>0)
{$query1="SELECT * FROM varunk WHERE name='$name' AND password='$pass'";
   $result=mysqli_query($con,$query1);
   $row=mysqli_fetch_array($result);
   if($row['name']==$name && $row['password']==$pass)
   {
   	header("Location:td2.php");
   }
   
   else{
   	?>
   
	<div style="color:red;font-size: 20px;">
		<?php
		 	echo "Login Is Not Successful Check Your Username Or Password.";
		?>
	</div>
	<?php
	}

}
else
{


	?>


	<div style="color:red;font-size: 20px;">
		<?php
		 echo "First Please Register.";
		?>
	</div>
	<?php

	}
     }
   ?>

	
  







	</div>
	</div>
		</div>

		<div class="col-6" style="">
			<div class="card pree" style=""> 
		
		<div class="card-body" style="">
			<h2 class="card-title text-center"> Sign Up</h2>
			<br>
	<form class="form-group" action="td.php" method="post">
		<input type="text" id="hello" name="name" class="form-control" placeholder="Enter Your Username:" autocomplete="off"  onfocus="validate()" onkeydown="validate()" onkeyup="validate()">
		<br>
		<input type="password" id="bye" name="pass" class="form-control" autocomplete="off" placeholder="Enter Your Pasword:" onfocus="supert()" onkeydown="supert()" onkeyup="supert()">
		<br>
		<input type="text" id="sorry" name="ema" autocomplete="off" class="form-control" placeholder="Enter Your Email:"  onfocus="superti()" onkeydown="superti()" onkeyup="superti()">
		<br>
		<input type="text" id="treko" name="ag" class="form-control" autocomplete="off" placeholder="Enter Your Age:" onfocus="agile()" onkeydown="agile()"  onkeyup="agile()" autocomplete="not">
		<br>
		<input type="submit"  class="form-control" value="Submit" id="btn" disabled="true"> 
		
	</form>
	<?php
	if(isset($_POST['name']))
{$n=$_POST['name'];

$p=$_POST['pass'];
$e=$_POST['ema'];


$con = new mysqli('localhost','root','','varun');
$sql="SELECT * FROM varunk WHERE name='$n' ";
$result=mysqli_query($con,$sql);
	error_reporting(E_ERROR | E_PARSE);
	$row=mysqli_fetch_array($result);
	$row1=$row['name'];
	if ($row1 == $n) {


		?>

		<div style="color:red; font-size: 20px;" >
			<?php
			echo "This Username Already Exist.";
			?>
		</div>
		<?php
			
	}

	else{
		$query1="INSERT INTO varunk (name,password,email) VALUES ('$n','$p','$e')";
		mysqli_query($con,$query1);

		?>

		<div style="color: green; font-size: 20px;">
			<?php
			echo "Now You Can Log In.";
			?>
		</div>

		
	
		<?php
		
				}

				

			}
			?>

			<div id="tell" style="font-size: 20px;">
			
		</div>

			</div>
</div>
	</div>
	
<script type="text/javascript">
	

	
	function validate()
	{
		var name=document.getElementById('hello');
		var p=document.getElementById('tell');
		var x=document.getElementById('btn');
		var c=true;
		
		if(name.value == "")
		{
			p.innerHTML="**The Name field should not be empty.";
			p.style.color="red";
			c=false;
		}


		if(!isNaN(name.value) && name.value!="")
		{
			p.innerHTML="**the name should only contain characters.";
			p.style.color="red";
			c=false;
		}

		if(name.value!=="" && isNaN(name.value))
		{
			p.innerHTML="success";
			p.style.color="green";
			c=true;
		}


		


		}
	
			

			




	



	function supert(){
				var pass=document.getElementById('bye');
				var p=document.getElementById('tell');
				var x=document.getElementById('btn');
		var c=true;
		
				if(pass.value=="")
				{

					p.innerHTML="** the password field should not be empty.";
					p.style.color="red";
					c=false;
				}
		if (pass.value.length<8 && pass.value!="") {
					p.innerHTML="Minimum length should be 8 characters.";
					p.style.color="red";
					c=false;


				}

				if(pass.value!="" && pass.value.length>=8){
					p.innerHTML="success";
					p.style.color="green";
					c=true;
				}


				
				

	}


	function agile() {
		
		  var age=document.getElementById('treko');
		  var p=document.getElementById('tell');
		  var x=document.getElementById('btn');
		var c=true;
		
	if(age.value=="")
	{
		p.innerHTML="The age field should not be empty.";
		p.style.color="red";
		c=false;
	}

	if((age.value.length<2 || age.value.length>2) && age.value!="")
	{
		p.innerHTML="The age field should have only two digit.";
					p.style.color="red";
		c=false;


	}

	if(age.value!="" && age.value.length==2)
	{
		p.innerHTML="success";
					p.style.color="green";
		c=true;

	}

	if (c) {
		x.disabled=false;
	}


	}


function superti(){
	var t=document.getElementById('sorry');
	var p=document.getElementById('tell');
	var x=document.getElementById('btn');
		var c=true;
		
	if(t.value=="")
	{
		p.innerHTML="The email field should not be empty.";
					p.style.color="red";
					c=false;

	}

	if (t.value.indexOf('@')<=0 && t.value!="") {
		p.innerHTML="The @ is present at wrong position.";
					p.style.color="red";
					c=false;


	}


	if ((t.value.charAt(t.value.length-3)!='.') && (t.value.charAt(t.value.length-4)!='.') && t.value!="" && t.value.indexOf('@')>0) {
		p.innerHTML="The '.' is present at wrong position.";
					p.style.color="red";
					c=false;


	}


	if((t.value.indexOf('@')>0 && t.value!="") && ((t.value.charAt(t.value.length-3)=='.')|| (t.value.charAt(t.value.length-4)=='.')))
	{   p.innerHTML="Success";
					p.style.color="green";
					c=true;

	}



	
}
	

	

			
</script>


</main>

</body>
</html>