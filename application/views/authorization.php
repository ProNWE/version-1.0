<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/auth.css">
</head>
<body>
	
	<div class="main-box">
		<div class="button2" id="login"><a href="#"><center>Вход</center></a>
			<div class="signin">
				<form action="<?=URL::site('auth/auth'); ?>" method="post">
					<input type="text" name="login" placeholder="Email">
					<input type="text" name="password" placeholder="Пароль">
					<input type="submit" name="submit" value="Войти">
				</form>
			</div>
		</div>
		<div class="button2" id="register"><a href="#"><center>Регистрация</center></a>
			<div class="signup">
				<form action="<?=URL::site('registration/add'); ?>" method="post">
					<input type="text" name="org_name" placeholder="Название организации"><br>
					<input type="text" name="lastname" placeholder="Фамилия"><br>
					<input type="text" name="name" placeholder="Имя"><br>
					<input type="text" name="surname" placeholder="Отчество"><br>
					<input type="text" name="city" placeholder="Город"><br>
					<input type="text" name="email" placeholder="Email"><br>
					<input type="text" name="password" placeholder="Пароль"><br>
					<input type="text" name="confirm_password" placeholder="Подтвердите пароль"><br>
					<input type="text" name="phone" placeholder="Телефон"><br>
					<input type="submit" name="submit" value="Регистрация">
				</form>
			</div>		
		</div>
	</div>
</body>
</html>
