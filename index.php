<!-- 
HTML for Frontend Page Basic Structure
CSS is for Template Styling
Javascript for Client side functionalities
PHP for Server side functionalities
MYSQL is database engine 
-->

<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<head>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
		<script src="javascript/scripts.js">
		</script>

		<title>My Website</title>

	</head>
	<body>
		<div id = "container">

			<div class= "header">
				<h1 class="banner"></h1>
			</div>

			<div id = "content">
				
				<div id ="nav">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">Login</button>
  						<div id="myDropdown" class="dropdown-content">
    						<a href="#">Link 1</a>
   							<a href="#">Link 2</a>
   							<a href="#">Link 3</a>
 						</div>					
					</div>

					
					<h3>Navigation</h3>
					<ul>
						<li><a class="selected" href = "">Home</a></li>
						<li>About</li>
						<li>Contact</li>
						<li>
							<form>
								<input type="text" name="username" class="usernameForm">
							</form>
						</li>
						<li>
							<form>
								<input type="text" name="password" class = "passForm">
							</form>
						</li>
					</ul>
					

				</div>

				<div id = "main">
					<h2>Home Page</h2>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus porttitor molestie ipsum in cursus. Cras semper id dui non condimentum. Morbi a tristique metus. Suspendisse dapibus arcu ut eros scelerisque, sed aliquam justo dignissim. Aliquam id nunc dui. Duis semper laoreet tellus, nec porta tortor eleifend eget. In tortor velit, feugiat vel ante vitae, porta accumsan nisl. Ut sit amet sem libero. Praesent a nisi convallis, dignissim ex et, lacinia nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam eget tellus a metus varius iaculis. Mauris ac eros tempor, gravida nisi eu, scelerisque massa. Aenean quis erat id lacus varius luctus.
					</p>
					<p>
					Morbi lacinia quis metus id fermentum. Sed euismod metus lectus, sit amet blandit lorem malesuada in. Aliquam aliquet posuere egestas. Nulla lacus nulla, lobortis non volutpat quis, dapibus at sem. Duis ac diam non felis viverra fringilla. Aliquam eleifend venenatis ante. Proin sit amet augue id sem pretium posuere. Proin bibendum mauris ac sapien vehicula, ac dapibus odio tristique. Maecenas dignissim tortor quis mauris congue pellentesque. Donec posuere interdum enim ac tristique. Curabitur scelerisque dui et venenatis dignissim.
					</p>
					<p>
					Praesent non turpis ac nulla hendrerit commodo eu vitae quam. Donec a erat at sapien ultricies consequat. Nam vel fringilla quam, vitae scelerisque purus. Vivamus at tortor rhoncus, iaculis massa et, ornare elit. Sed ut ligula et nisl euismod posuere at dignissim tortor. Quisque ante tortor, varius ut semper sed, dictum in nibh. Mauris volutpat suscipit dolor, eget congue velit fringilla id. Suspendisse ut lectus sed leo vehicula mattis. Mauris et lorem libero. Donec nec purus maximus, bibendum justo nec, pharetra magna. Sed ac libero convallis, placerat velit at, commodo turpis. Curabitur auctor dui in nunc sollicitudin consectetur. Proin venenatis odio ac nunc porttitor, quis facilisis lorem rutrum. Ut tincidunt orci a maximus gravida. Quisque sed dictum lorem.
					</p>
				</div>	
			</div>		

			<div id = "footer">
				Copyright &copy; 2016 Stefan Scorse
			</div>
		</div>
	</body>
</html>

<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
?>