<!DOCTYPE html>
<html>
<head>
<title>showProducts</title>
</head>
<body>

		<button id="btnGetLetter">GET LETTER</button>
         
		<script>
				btnGetLetter.addEventListener("click", function(){
				  var ajax = new XMLHttpRequest(); // AJAX
				  ajax.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				     console.log(this.responseText);
				    }
				  };
				  ajax.open( "GET", "api-get-letter.php", true );
				  ajax.send();
				});
    </script>
    

    
</body>
</html>