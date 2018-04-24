<?php
	// always the first line
	session_start();
	echo $_SESSION['jUser']->id;
	echo $_SESSION['jUser']->userName;	
?>

<!DOCTYPE html>
<html>
<head>
<title>SIMPLE - LOGIN</title>
</head>
<body>

		<?php
			// tell the server that we will use sessions
			/*
			$jUser = json_decode('{}');
			$jUser->id = uniqid(); 
			$jUser->userName = "Santiago";

			$_SESSION['jUser'] = $jUser;
			echo $_SESSION['jUser']->id;
			echo $_SESSION['jUser']->userName;
			*/
		?>



		<script>

			/*
		  var ajax = new XMLHttpRequest();
		  ajax.onreadystatechange = function() 
		  {
		    if (this.readyState == 4 && this.status == 200) 
		    {
		     	var sDataFromServer = this.responseText;
     		}
	    }			
		  ajax.open( "METHOD", "URL" , true );
		  ajax.send(frm);					
			*/
			  	

    </script>
    

    
</body>
</html>