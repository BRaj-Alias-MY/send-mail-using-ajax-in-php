<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('body').on('click','#btn_send',function(){
		var fromMail = $('#fromMail').val();
		var message = $("#message").val();
		//alert(fromMail);
		//alert(message);
		 $.ajax({
                        url: 'mailprocess.php',
                        type: 'post',
                        data: {
                            "fromMail": fromMail,
							"message" : message
                            
                        },
                        success: function(response) {
                           
                            $("#result").html(response);
                            $("#result").fadeOut(3000);
                        }
               });
		
	});
	
	 
	
});	
</script>
</head>
<body>
	<form action="" method="POST">
	 <div class="container">
  <div class="jumbotron">
    <h1>Sending Mail using AJAX in PHP</h1> 
     
</div>
	</div>
		 
	<div class="container">
  <h2>Example to send email using jQuery (AJAX) in PHP</h2>
  <div class="panel panel-default">
    <div class="panel-body">Enter your correct email address to test the example.</div>
	   <div class="panel-body">
		     Enter Your Email Address:<br> <input type="email" class="form-control" name="fromMail" id="fromMail" placeholder="example@gmail.com"/>
		   <br>
		   Enter Message :<br> <textarea class="form-control" style="height:100px" id="message" name="message"></textarea>
		   <br>
		   <button type="button" id="btn_send" class="btn btn-primary">Send Mail</button>
		   <br>
		   <div id="result"></div>
  </div>
</div>
</form>

	 
</body>

</html>