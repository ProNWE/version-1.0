<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/auth.css">
	
	<script src="<?=$assets; ?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets; ?>bootstrap/js/bootstrap.js"></script>
	<script>
	$(document).ready(function() {
	    $('#email').blur(function() {
	        if($(this).val() != '') {
	            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
	            if(pattern.test($(this).val())){
	                $(this).css({'border' : '1px solid #569b44'});
	                $('#valid').text('Верно');
	            } else {
	                $(this).css({'border' : '1px solid #ff0000'});
	                $('#valid').text('Не верно');
	            }
	        } else {
	            $(this).css({'border' : '1px solid #ff0000'});
	            $('#valid').text('Поле email не должно быть пустым');
	        }
	    });
});
</script>
</head>
<body>
<? if ($attempt != 0): ?>
	<div class="container">
		<div class="col-lg-2">
			<div class="row">
				<p style="color: red; font-size: 15px; position: absolute;">
					Вы неправильно вводите логин или пароль.
					Прошу Вас, будьте внимательны.
					Совершено попыток: <?=$attempt; ?>
					<? if ($attempt >=2 ): ?>
						<p style="position: absolute; top: 1200%; color: blue;">Если вы не пройдете аутентификацию в 3 раз, система временно заблокирует Вас.
						В целях безопастности, мы отправим письмо на вашу почту с генерированным паролем и вы легко
						сможете поменять свой пароль. Спасибо!
						</p>
					<? endif ?>
				</p>
			</div>
		</div>
	</div>
<? endif ?>
	<div class="main-box">
		<div class="button2" id="login"><a href="#"><center>Вход</center></a>
			<div class="signin">
				<form action="<?=URL::site('auth/auth'); ?>" method="post" role="form">
					<input type="text" name="login" class="form-control input-sm" placeholder="Email" required>
					<input type="password" name="password" class="form-control input-sm" placeholder="Пароль" required>
					<input type="submit" name="submit" value="Войти" class="form-control btn btn-sm btn-info">
				</form>
			</div>
		</div>
		<div class="button2" id="register"><a href="#"><center>Регистрация</center></a>
			<div class="signup">
				<form action="<?=URL::site('registration/add'); ?>" method="post" role="form">
					<input type="text" class="form-control input-sm" name="org_name" placeholder="Название организации" required>
					<input type="text" class="form-control input-sm" name="lastname" placeholder="Фамилия" required>
					<input type="text" class="form-control input-sm" name="name" placeholder="Имя" required>
					<input type="text" class="form-control input-sm" name="surname" placeholder="Отчество" required>
					<input type="hidden" name="address" value="Spb">
					<input type="text" class="form-control input-sm" name="city" placeholder="Город" required>
					<input type="text" class="form-control input-sm" name="login" id="email" placeholder="Email" required>
					<input type="password" class="form-control input-sm" name="password" placeholder="Пароль" required>
					<input type="password" class="form-control input-sm" name="confirm_password" placeholder="Подтвердите пароль" required>
					<input type="text" class="form-control input-sm" name="phone" placeholder="Телефон" required>
					<input type="submit" class="form-control btn btn-sm btn-success" name="submit" value="Регистрация">
				</form>
			</div>		
		</div>
	</div>
</body>
</html>
