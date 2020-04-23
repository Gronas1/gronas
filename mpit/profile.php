<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		a:hover {
		text-decoration: none; 
	}
	body {
		background: #fff8de;
	}
	.box {
		height: 268px; 
		width: 290px; 
		margin-left: 60px; 
		margin-top: 62px; 
		background: orange;
		border-radius: 5px;
	}
	.bbox {
		height: 1200px;
		width: 1200px;
		background: orange;
		margin-left: 100px;
		margin-top: 62px;
		border-radius: 5px;
	}
	.jbox {
		height: 1100px;
		width: 1100px;
		margin-left: 50px;
		margin-top: 50px;
		border-radius: 5px;
	}
	</style>
</head>
<body>
	<?php 
		mysqli_connect("127.0.0.1", "root", "", "profiles")
	 ?>
	<div class="col-12 px-0 row mx-0" style="height: 30px; border-bottom: 1px solid #391B07; background: orange;">
		<div class="col-1"></div>
		<div class="col-9"></div>
		<div class="col-2 row px-0 mx-0">
			<div><h6 class="ml-5 mt-1"><a href="Index.php" class="text-dark a">Вернуться</a></h6></div>
			<div><h6 class="ml-5 mt-1"><a href="login.php" class="text-dark a">Выйти</a></h6></div>
		</div>
	</div>
	<div class="row">
		<div class="box">
			<button type="button" class="btn btn-warning btn-lg w-100 mt-3">Профиль</button>
			<button type="button" class="btn btn-lg w-100 mt-4" style="background: orange;">Аккаунт</button>
			<button type="button" class="btn btn-lg w-100 mt-4" style="background: orange;">Заказы</button>
		</div>
		<div  class="bbox"> 
			<div class="jbox bg-warning">
				<div class="">
						<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5" style="border-radius: 50%; height: 150px; width: 150px; margin-left: 450px;">
						<h1 class="text-center mt-5">Иннокентий, 14 лет.</h1>
						<div style="background: #fff8de; height: 700px; width: 1000px; margin-left: 50px; margin-top: 50px">
							<div class="row">
								<h3 style="margin-left: 50px; padding-top: 50px">Адрес:</h3> 
								<h3 style="margin-left: 230px; padding-top: 50px">Проспект Ленина 12, кв 12,677000</h3>
							</div>
							<div class="row">
								<h3 style="margin-left: 50px; padding-top: 50px">Телефон:</h3> 
								<h3 style="margin-left: 200px; padding-top: 50px">+79242504020</h3>
							</div>
							<div class="row">
								<h3 style="margin-left: 50px; padding-top: 50px">Паспортные данные:</h3> 
								<h3 style="margin-left: 50px; padding-top: 50px">PASPORT</h3>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>