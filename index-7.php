<!DOCTYPE html>
<html>
<head>
	<title>ADD LETTER TO DATABASE -- php WRITE TO A FILE</title>
	<style>
		*{margin: 0;padding: 0;box-sizing: border-box;}
		body{
			width: 200vw;
			height: 100vh;
			font-size: 16px;
			overflow: hidden;
		}
		header{
			display: grid;
			justify-content: center;
			align-items: center;
			width: 100vw;
			height: 70px;
			color: white;
			background-color: rgba(130,0,255,1);
			font-size: 30px;
		}
		div.container{
			margin-top: 20px;
			display: grid;
			width: 100vw;
			height: 30vmin;			
			grid-gap: 10px;
			padding: 0px 10%;
			grid-template-columns: 1fr 1fr 1fr;
		}
		div.container > div{
			display: grid;
			justify-content: center;
			align-items: center;
			background-color: rgba(130,0,255,1);
			padding: 20px;
			/*font-size: 40px;*/
		}		
		a:link{
			color: white;
			text-decoration: none;
		}
		div.container div:nth-child(1){
			background-color: rgba(130,0,255,0.8);
		}
		div.container div:nth-child(2){
			background-color: rgba(130,0,255,0.6);
		}
		div.container div:nth-child(3){
			background-color: rgba(130,0,255,0.3);
		}				
	</style>
</head>
<body>

	<header>ADD LETTER TO THE DATABASE</header>

	<div class="container">
		<div><a href="save.php?letter=A">A</a></div>
		<div><a href="save.php?letter=B">B</a></div>
		<div><a href="save.php?letter=C">C</a></div>	

		<div>1. Create the data.txt file and write [] in it</div>	
		<div>2. Pass a letter to the file (save.php?letter=A)</div>	
		<div>3. GET the letter from the address bar ($_GET['letter'])</div>
		<div>4. Open the data.txt file, you get text</div>
		<div>5. Convert the text data to an object (json_decode)</div>
		<div>6. Now you have an array. Push the data to it. array_push or aProducts[] = $sLetter</div>
		<div>7. Convert the array to text</div>
		<div>8. Save the text back to the data.txt (overwrite). Use file_put_contents()</div>

	</div>



</body>
</html>