
<?php
set_time_limit(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CHECK EMAIL IS EXISTS LIVE OR NOT</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
	
		<?php
		include_once 'class.verifyEmail.php';

		//
		$email = isset($_POST['email']) ? $_POST['email'] : ''; //pass an email here to test
		//
		
		$vmail = new verifyEmail();
		$vmail->setStreamTimeoutWait(20);
		$vmail->Debug= TRUE;
		$vmail->Debugoutput= 'html';

		$vmail->setEmailFrom('info.cloudevils@gmail.com');

		
		?>

        <center>
        <form action="" method="POST">

        <input type="email" name="email">
        <input type="submit" value="Check">
        </form>


        <div class="dispaly">

        <?php
        
        if ($vmail->check($email)) {
			echo '<h1 class="ss"> The email ' . $email . ' is Valid</h1>';
		} 
		else {
			echo '<h1 class="ss">The email ' . $email . ' is not Valid</h1>';
		}
        
        ?>

        

        </div>

        </center>
    </body>
</html>

