<DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display+SC" rel="stylesheet">
</head>  
<body class="body">   
  <ul class="nav">  
      <li><a href="index.html" >HOME</a></li>
      <li class="lipro"><a href="gallery.html">PROJECTS</a></li>
      <!--  <li><a href="about.html">ABOUT</a></li> -->
      <li id="current"><a href="about.html">GUESTBOOK</a></li>
    </ul>
   <ul class ="nav" id="probar">
     <li><a>PIE.ME</a>
     <li><a>SCORES</a>
     <li><a>FOR_EST</a>
     <li><a>EVO GAME</a>   
   
   
   </ul> 
    <div id="wrapper">
    	<div id="bookcase">
    	<h1 class="datetext">RECENT MESSAGES:</h1>
    	<div id="div1">
			
		</div>

			<script>
			function submit(){
				if(document.getElementById('namex').value != "" && document.getElementById('booklet').value != ""){
						
						
						var para = document.createElement("h3");
						var parax = document.createElement("p");
						var nodex = document.createTextNode(" - " + document.getElementById("namex").value + ", at " +Date());
						var node = document.createTextNode(document.getElementById("booklet").value);
						para.appendChild(node);
						parax.appendChild(nodex);
						var element = document.getElementById("div1");
						linebreak = document.createElement("br");
						element.appendChild(linebreak);
						element.appendChild(linebreak);
						element.prepend(parax);
						element.prepend(para);
						
						document.getElementById("namex").value = "";
						document.getElementById("booklet").value = "";
						$('#namex').css('background-color','rgba(0,0,0,0.3)');
						
				} 
				else{
				}
			}
			</script>
    	<?php
			$mysqli = new mysqli("localhost", "praktikant", "praktikant", "praktikant_01");
			$query = $mysqli->query('select * from guestbook ORDER BY `id` DESC');
			while ($entry = mysqli_fetch_array($query)) {
				//var_dump($entry);
				echo "\n\n";

				echo '<h2>' . "&nbsp;" . $entry['message'] . '</h2>';
				echo '<p class="whatever">' . ' - ' . $entry['nickname'] . " at " . date("Y/m/d") . "&nbsp;" . '</p>';
				//echo $entry->nickname; 
			}
			?>
    	
    	</div>
    	<div id="notebook">
    	<h1 class="datetext">LEAVE YOUR MESSAGE</h1>
    	<form action="post.php" method="post">
	    	<input type="text" name="nickname" id="namex" placeholder="YOUR NAME"oninput="Gradient()">
	    	<textarea id="booklet" placeholder="YOUR COMMENT..." name="message"></textarea>
	    	<button type="submit" id="submit">POST TO PUBLIC</button>
    	</form>
    	
    	
    	
    	</div>
  </div>
  <script src='https://code.jquery.com/jquery-3.1.0.min.js'></script>
  <script src='main.js'></script>
</body>
</html>