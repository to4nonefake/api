<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Обновление DNS</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
		<a href="#" class="navbar-brand">
			<img src="https://img.icons8.com/nolan/50/api.png" width="30" height="30" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="index.php" class="nav-link">Зарегистрировать домен с помощью ID</a>
				</li>
				<li class="nav-item">
					<a href="byprofile.php" class="nav-link">Зарегистрировать домен с использованием Анкеты</a>
				</li>
				<li class="nav-item active">
					<a href="dnsupdate.php" class="nav-link">Обновление DNS</a>
				</li>
			</ul>
		</div>
	</nav>
	</br>
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center">
				<form class="w-100" action="dnsupdate.php" method="get">

					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Primary (master) server</h5>
    						<small align="left" id="primaryServer" class="form-text text-muted">Имя первичного сервера DNS</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="primaryServer" class="form-control" id="primaryServer" placeholder="example.ru." required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Responsible address</h5>
    						<small align="left" id="responsibleAddress" class="form-text text-muted">E-mail администратора зоны</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="responsibleAddress" class="form-control" id="responsibleAddress" placeholder="hostmaster.example.ru." required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Serial</h5>
    						<small align="left" id="serial" class="form-text text-muted">Серийный номер зоны</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="2020021200" required>
  						</div>
  					</div>
  					</br>

					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Refresh</h5>
    						<small align="left" id="serial" class="form-text text-muted">Интервал между обновлениями данных зоны</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="10800" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Retry</h5>
    						<small align="left" id="serial" class="form-text text-muted">Интервал между повторением попыток обновления</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="3600" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Expire</h5>
    						<small align="left" id="serial" class="form-text text-muted">Время актуальности данных на вторичных серверах DNS</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="604800" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Negative TTL</h5>
    						<small align="left" id="serial" class="form-text text-muted">Время кэширования отрицательного ответа (NXDOMAIN)</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="3600" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">Default TTL</h5>
    						<small align="left" id="serial" class="form-text text-muted">Время кэширования положительного ответа (NOERROR) по умолчанию</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="3600" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-3">
    						<h5 align="left">TTL</h5>
    						<small align="left" id="serial" class="form-text text-muted">Время кэширования данных записи SOA</small>
  						</div>
  						<div class="col-sm">
    						<input type="text" name="serial" class="form-control" id="serial" placeholder="7200" required>
  						</div>
  					</div>
  					</br>
  					
  					<button type="submit" class="btn btn-primary">Изменить</button>
  					<a href="dnsupdate.php" class="btn btn-light"><img src="https://img.icons8.com/nolan/64/available-updates.png" width="30" height="30" alt="logo"></a>
				</form>
			</div>			
		</div>
	</div>
	</br>
	<div class="container-fluid">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<?php 
						require_once 'api_class.php';
					?>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>