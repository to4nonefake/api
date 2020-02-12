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
  						<div class="col-sm-4">
    						<label for="clientId">*Идентификатор клиента</label>
    						<input type="number" name="clientId" class="form-control" id="clientId" placeholder="404" required>
  						</div>
  						<div class="col-sm">
    						<label for="donainName">*Имя домена</label>
    						<input type="text" name="donainName" class="form-control" id="donainName" placeholder="example.ru" required>
    						<small id="emailHelp" class="form-text text-muted">domain.ru или domain.su или домен.рф или xn--d1acufc.xn--p1ai</small>
  						</div>
  					</div>

  					</br>

					<div class="row">
  						<div class="col-sm">
    						<label for="period">Период регистрации</label>
    						<input type="number" name="period" class="form-control" id="period" placeholder="1">
    						<small id="emailHelp" class="form-text text-muted">Без указания считается как 1 год</small>
  						</div>
  						<div class="col-sm">
    						<label for="vendorId">Идентификатор поставщика</label>
    						<input type="number" name="vendorId" class="form-control" id="vendorId">
  						</div>
  						<div class="col-sm">
    						<label for="comment">Комментарий</label>
    						<input type="text" name="comment" class="form-control" id="comment">
  						</div>
  					</div>

  					</br>
					<small id="emailHelp" class="form-text text-muted">* - обязательные для заполнения поля</small>
					</br>
  					<button type="submit" class="btn btn-primary">Зарегистрировать</button>
  					<a href="index.php" class="btn btn-light"><img src="https://img.icons8.com/nolan/64/available-updates.png" width="30" height="30" alt="logo"></a>
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
						if(isset($_GET['clientId']) && isset($_GET['donainName'])){
							$clientId = $_GET['clientId'];
							$donainName = $_GET['donainName'];
							$period; if (empty($_GET['period'])){$period = 1;} else {$period = $_GET['period'];};
							$vendorId; if (empty($_GET['vendorId'])){$vendorId = null;} else {$vendorId = $_GET['vendorId'];};
							$comment; if (empty($_GET['comment'])){$comment = null;} else {$comment = $_GET['comment'];};
							$CreateById = new Api;
							$response = $CreateById->DomainCreateById($clientId, $donainName, $vendorId, $period, $comment);
							echo "$response";
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>