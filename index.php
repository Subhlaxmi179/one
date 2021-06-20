<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post" action="validate_email.php">
      Email :<input type="text" id="email" name="mail">
      <input type="submit" name="" value="Send Otp">

    </form>
<div >
<script >
    function Send_Otp(){
      var email=jQuery('#email').val();  //to retrieve the value of email id using .val and store i variable email formed using variable
      jQuery.ajax({
        url:"validate_email.php",
		    type:"post",
		    data:"mail="+email,
	  	success:function(result){} // result stores value returned by validate_email
    })

    }
</script>

</div>
  </body>
</html>
