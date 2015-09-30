<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/auth.css">
	

	<script src="<?=$assets; ?>bootstrap/js/bootstrap.js"></script>
</head>
<body>
	
	<div class="main-box">
		<div class="button2" id="login"><a href="#"><center>Вход</center></a>
			<div class="signin">
				<form action="<?=URL::site('auth/auth'); ?>" method="post" role="form">
					<input type="text" name="login" class="form-control input-sm" placeholder="Email">
					<input type="text" name="password" class="form-control input-sm" placeholder="Пароль">
					<input type="submit" name="submit" value="Войти" class="form-control btn btn-sm btn-info">
				</form>
			</div>
		</div>
		<div class="button2" id="register"><a href="#"><center>Регистрация</center></a>
			<div class="signup">
				<form action="<?=URL::site('registration/add'); ?>" method="post" role="form">
					<input type="text" class="form-control input-sm" name="org_name" placeholder="Название организации">
					<input type="text" class="form-control input-sm" name="lastname" placeholder="Фамилия">
					<input type="text" class="form-control input-sm" name="name" placeholder="Имя">
					<input type="text" class="form-control input-sm" name="surname" placeholder="Отчество">
					<input type="text" class="form-control input-sm" name="city" placeholder="Город">
					<input type="text" class="form-control input-sm" name="email" placeholder="Email">
					<input type="text" class="form-control input-sm" name="password" placeholder="Пароль">
					<input type="text" class="form-control input-sm" name="confirm_password" placeholder="Подтвердите пароль">
					<input type="text" class="form-control input-sm" name="phone" placeholder="Телефон">
					<input type="submit" class="form-control btn btn-sm btn-success" name="submit" value="Регистрация">
				</form>
			</div>		
		</div>
	</div>
</body>
</html>
