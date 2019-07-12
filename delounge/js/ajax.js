$(document).ready(function(){

	$('#submit').click(function(){



		var name=$('#name').val();
var email=$('#email').val();
var message=$('#msg').val();
var vardata='name='+ name ="email=" + email + "message=" + message;

$.ajax({

type:"POST",
url:"email.php",
data:vardata,
success:function()
{
	alert("it was success");
}




});

	});







});