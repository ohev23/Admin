<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
</head>
<body>

</body>
 <div>
 	<?php 
			$database=[
				[
					"title"=>"статья1",
					"short_text"=>"lorem",
					"img" => "img/1.jpg",
					"users"=>"user12"
				],
				[
					"title"=>"статья2",
					"short_text"=>"lorem",
					"img" => "img/2.jpg",
					"users"=>"user30"
				],
				[
					"title"=>"статья3",
					"short_text"=>"lorem",
					"img" => "img/3.jpg",
					"users"=>"user50"
				],
				[
					"title"=>"статья4",
					"short_text"=>"lorem",
					"img" => "img/4.jpg",
					"users"=>"user90"
				],
			];
			
		 ?>
 </div>
 	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<div class="col-12" style=""> 
			 <?php 

			  for($i=0; $i<1; $i++){
				echo "<h1 style='color:green;'>".$database[0]["title"]."</h1>";
				echo "<p style='color:green;'>".$database[0]["short-text"]."</p>";
				echo "<img src=".$database[0]["img"]." class='w-100'>";
				echo "<p style='color:green;'>"."Автор:".$database[0]["users"]."</p>";
			};
   
			 ?>
			 <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
		</div>
	</div>
</html>