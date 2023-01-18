<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Php Developer Cockatoo</title>
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
</head>
<body>
<center>   <h1>Enter the student details</h1> </center>
<div class= "form-ajax">

<p id="message" style="display: none">Data Sent</p>

<span id="error" style="display: none"></span>

<form action="javascript:void(0)" method="post" id="ajax-form">

<label>Name</label>
<input type="text" name="name" id="name"  value="" maxlength="50" >
<br>
<label>Age</label>
<input type="number" name="age" id="age" value=""  required >
<br>
<p>Gender<br>
<input type="radio" name="gender"  value="Male"/> Male
<br>
<input type="radio" name="gender"  value="Female"/> Female 
</p>
<label>Mobile</label>
<input type="number" name="mobile" id="mobile"  value="" required>
<br>
<label>Standard</label>
<input type="number" name="std" id="std"  value="" required>
<br>
<input type="submit"  name="submit" value="submit">
<input type="reset" name="reset" value="reset">

</form>
</div>
<script type="text/javascript">
$(document).ready(function($){
 
$("#error").hide();
$("#message").hide();

$('#ajax-form').submit(function(e){
    e.preventDefault();
    $("#error").hide();

var name = $("input#name").val();
if(name == ""){
    $("#error").fadeIn().text("Name required.");
    $("input#name").focus();
    return false;
}

var radioValue = $("input[name='gender']:checked").val();
if(!radioValue)
{
    $("#error").fadeIn().text("gender required.");
}


$.ajax({
type:"POST",
url: "connect.php",
data: $(this).serialize(),
success: function(){
$("#message").fadeIn();
}
});

});  
return false;

});

</script>
</body>
</html>