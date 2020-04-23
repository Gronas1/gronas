<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.a:hover {
		text-decoration: none; 
	}
	</style>
</head>
<body>
	<?php 
		mysqli_connect("127.0.0.1", "root", "", "profiles")
	 ?>
	<div class="col-12 px-0 row mx-0" style="height: 30px; border-bottom: 1px solid #391B07;  background: orange;">
		<div class="col-1"></div>
		<div class="col-9"></div>
		<div class="col-2 row px-0 mx-0">
			<div><h6 class="ml-5 mt-1"><a href="" class="text-dark a">Вход</a></h6></div>
			<div><h6 class="ml-5 mt-1"><a href="register.php" class="text-dark a">Регистрация</a></h6></div>
		</div>
		<div class="col-4" style="height: 1000px"></div>
		<div class="col-4 bg-warning" style="height: 1000px">
			<div style="height: 200px">	</div>
			<div class="text-center"><h1>Добро Пожаловать</h1></div>
			<form action="/" method="post">
				<h5 style="margin-top: 100px">Логин/Почта</h5>
				<input type="" name="" class="w-100" style="height: 60px; border-radius: 5px; border: 1px solid #391B07">
				<h5 style="margin-top: 50px">Пароль</h5>
				<input type="" name="" class="w-100" style="height: 60px; border-radius: 5px; border: 1px solid #391B07">
		    </form>
			<a href="index.php"><button class="btn w-50 btn-lg" style="margin-left: 150px; margin-top: 30px; background: #FF830D">Вход</button></a>
			<div style="height: 30px">
				<p class="text-center" style="margin-top: 20px">Ещё не зарегестрированы?</p>
			</div>
			<div class="text-center text-dark">
				<a href="register.php" class="text-center text-dark">Регистрация</a>
			</div>
		</div>
		<div class="col-4" style="height: 1000px"></div>
	</div>
</body>
</html>