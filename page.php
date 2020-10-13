<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<form action="index.php" method="GET">
 	</form>
 	<form action="admin.php"  method="GET"></form>
 		<?php
 			$con = mysqli_connect('127.0.0.1','root',"","blog" );
 			if($con==true){
 				echo "ok";
 			}else{
 				echo"no";
 			}
 			$q = mysqli_query($con, "SELECT * FROM pages");
 		
 		  for($i=0; $i<count($q); $i++){
 		  		$result1 = $q->fetch_assoc();
 				echo "<h1 style='background-color: green'><a href='1st.php'>".$result1[$i]["title"]."</h1>";
				echo "<p style='color:green;'>".$result1[$i]["text"]."</p>";
				echo "<img src=".$result1[$i]["img"]." class='w-100'>";
				echo "<p style='color:green;'>"."Автор:".$result1[$i]["author"]."</p>";

				

				}



 		?>

		<?php 
			$database=[
				[
					"title"=>"статья1",
					"short_text"=>"lorem",
					"img" => "img/1.jpg",
					"users"=>"user12",
					"st"=>"1st.php"
				],
				[
					"title"=>"статья2",
					"short_text"=>"lorem",
					"img" => "img/2.jpg",
					"users"=>"user30",
					"st"=>"2nd.php"
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
		<div>
			<h4><a href="admin.php">Admin-панель</a></h4>
			<h1>Привет!</h1>
			<h1 style="background-color: green">
				<?php
						echo $_GET["Zagolovok"];
				?>
			</h1>

			<h4>
				<?php
						echo $_GET["Text"];
				?>
			</h4>
			<h4>
			<?php
						echo $_GET["Author"];
				?>
			</h4>
		</div>
		<h1 class="text-center">БЛОГ</h1>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
<h1>		 
<?php
	echo $_GET["Name"];
?>
</h1>
<h1>
	<?php
		echo $_GET["Autorisation"];
	?>
</h1>
			 <?php 

			  for($i=0; $i<count($database); $i++){
				echo "<h1 style='background-color: green'><a href='1st.php'>".$database[$i]["title"]."</h1>";
				echo "<p style='color:green;'>".$database[$i]["short-text"]."</p>";
				echo "<img src=".$database[$i]["img"]." class='w-100'>";
				echo "<p style='color:green;'>"."Автор:".$database[$i]["users"]."</p>";
				echo date('l jS \of F Y h:i:s A');

			};
		  	$name="sans";
		  	$surname ="sss"
   
			 ?>
		</div>
	</div>
</body>
</html>