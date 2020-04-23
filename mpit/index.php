<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		a:hover {
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
			<div><h6 class="ml-5 mt-1"><a href="profile.php" class="text-dark a">Мой Профиль</a></h6></div>
			<div><h6 class="ml-5 mt-1"><a href="login.php" class="text-dark a">Выйти</a></h6></div>
		</div>
	</div>
	<div class="row col-12 px-0 ml-0">
		<div class="col-9 bg-warning px-0" style="height: 1000px">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1322.904267396944!2d129.73595478805316!3d62.036378423810405!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5bf64a4454267697%3A0x779be2cf733c39bb!2z0J_QvtGP0YDQutC-0LI!5e0!3m2!1sru!2sru!4v1587442816786!5m2!1sru!2sru" width="600" height="1000" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="w-100"></iframe>
		</div>
		<div class="col-3 bg-warning pl-0 pr-0" style="height: 1000px">
			<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
						<div class="row">
				<div class="col-1">
				<img src="https://avatanplus.com/files/resources/mid/5744c2a1b1787154e49847bf.jpg" class="mt-5 ml-4" style="border-radius: 50%; height: 75px; width: 75px">
				</div>
				<div class="col-10">
					<button type="button" class="text-left mt-5" data-toggle="modal" data-target="#exampleModal" style=" border-radius: 5px; border: 1px solid #E2EAF5; height: 75px; width: 260px; margin-left: 80px"> 
						<div class="row">
							<h6 class="ml-3">Прокопий Андреевич</h6>
							<p class="text-success ml-4">500m</p>
						</div>
					  <p style="font-size: 11px">привет я прокопий....</p>
					</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Прокопий Андреевич</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....привет я прокопий....
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
					        <button type="button" class="btn btn-primary">Выбрать</button>
					      </div>
					    </div>
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