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
  						<div class="col-sm-6">
    						<label for="id">*ID</label>
    						<input type="text" name="id" class="form-control" id="id" placeholder="123" required>
  						</div>
  						<div class="col-sm-6">
  							<label for="clientID">*Client Id</label>
 							<input type="text" name="clientID" class="form-control" id="clientID" placeholder="321" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-6">
    						<label for="domainName">*Доменное имя name-сервера</label>
    						<input type="text" name="domainName" class="form-control" id="domainName" placeholder="ns1.domain.ru" required>
  						</div>
  						<div class="col-sm-6">
    						<label for="domainName2">*Доменное имя name-сервера</label>
    						<input type="text" name="domainName2" class="form-control" id="domainName2" placeholder="ns1.domain.ru" required>
  						</div>
  					</div>
  					</br>

  					<div class="row">
  						<div class="col-sm-6">
    						<label for="domainAddress">*Адреса name-сервера</label>
    						<input type="text" name="domainAddress" class="form-control" id="domainAddress" placeholder="100.200.5.1 100.200.5.2">
    						<small id="domainAddressHelp" class="form-text text-muted">Несколько адресов укажите через пробел</small>
  						</div>
  						<div class="col-sm-6">
    						<label for="domainAddress2">*Адреса name-сервера</label>
    						<input type="text" name="domainAddress2" class="form-control" id="domainAddress2" placeholder="100.200.5.1 100.200.5.2">
    						<small id="domainAddressHelp" class="form-text text-muted">Несколько адресов укажите через пробел</small>
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
						if (isset($_GET['id'])){
							$api = new Api;
							$response = $api->DNSChange($_GET['id'], $_GET['clientID'], $_GET['domainName'].' '.$_GET['domainAddress'], $_GET['domainName2'].' '.$_GET['domainAddress2']);
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