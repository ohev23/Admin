<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form action="page.php" method="GET">
   		<div class="col-8 mx-auto">
   			<h3>Заголовок:</h3>
   			<input type="" name="Zagolovok" class="form-control">
   		</div>
   	<div class="col-4">
   			<?php
 			$poop = mysqli_connect('127.0.0.1','root',"","users");
 			$q = mysqli_query($poop, "SELECT * FROM users");
 		
 		  for($i=0; $i<count($q); $i++){
 		  		$result1 = $q->fetch_assoc();
 		  		$result2 = $q->fetch_assoc();
 		  		$result3 = $q->fetch_assoc();
 		  		$result4 = $q->fetch_assoc();
 		  		echo "<p style='color:green;'>".$result1["name"]."</p>";
 		  		echo "<p style='color:green;'>".$result1["email"]."</p>";
 		  		echo "<p style='color:green;'>".$result1["phone"]."</p>";
 		  		echo "<button class='btn btn-success'>Написать</button>";

 		  		echo "<p style='color:green;'>".$result2["name"]."</p>";
 		  		echo "<p style='color:green;'>".$result2["email"]."</p>";
 		  		echo "<p style='color:green;'>".$result2["phone"]."</p>";
 		  		echo "<button class='btn btn-success'>Написать</button>";

 		  		echo "<p style='color:green;'>".$result3["name"]."</p>";
 		  		echo "<p style='color:green;'>".$result3["email"]."</p>";
 		  		echo "<p style='color:green;'>".$result3["phone"]."</p>";
 		  		echo "<button class='btn btn-success'>Написать</button>";

 		  		echo "<p style='color:green;'>".$result4["name"]."</p>";
 		  		echo "<p style='color:green;'>".$result4["email"]."</p>";
 		  		echo "<p style='color:green;'>".$result4["phone"]."</p>";
 		  		echo "<button class='btn btn-success'>Написать</button>";

		}
 		?>
   	</div>
   <div class="col-8 mx-auto">
   		<h3>Текст поста</h3>
   		<textarea name="Text" class="form-control">
   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
   			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
   			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
   			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
   			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
   			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
   		</textarea>
   </div>
 		<div class="col-8 mx-auto">
   			<h3>Автор:</h3>
   			<input type="" name="Author" class="form-control">
   			</div>
   		<div class="col-8 mx-auto">
   			<button class="btn btn-success">Create a post</button>
   		</div>
    </form>
</body>
</html>