<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/auth.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/label-box.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<script src="<?=$assets; ?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets; ?>bootstrap/js/bootstrap.js"></script>
	<script>
	function sh(num)
	{
		document.getElementById("sign_"+"1").style.display = "none";
		document.getElementById("sign_"+"2").style.display = "none";
		document.getElementById("sign_"+num).style.display = "block";
		if (num == 1)
		{
			document.getElementById("login").style.fontWeight = "bold";
			document.getElementById("register").style.fontWeight = "400";
		}
		else
		{
			document.getElementById("register").style.fontWeight = "bold";
			document.getElementById("login").style.fontWeight = "400";
		}
	}
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

	<div id="tomain">
		<a href="<?=URL::site('#1'); ?>">
		<i class="position fa fa-home fa-5x"></i>
	</div>
	
	<div id="signinup">
		<div class="button2" id="login">
			<a href="javascript:sh('1')">
				<center>Вход</center>
			</a>
		</div>
		<div class="button2" id="register">
			<a href="javascript:sh('2')">
				<center>Регистрация</center>
			</a>
		</div>
		<div class="signin" id="sign_1">
			<form action="<?=URL::site('auth/auth'); ?>" method="post">
				<div>
					<input type="text" required name="login">
					<div class="label-box">
						<label>Email</label>
					</div>
				</div>
				<div>
					<input type="password" required name="password">
					<div class="label-box">
						<label>Пароль</label>
					</div>
				</div>
				<input type="submit" name="submit" value="Войти">
			</form>
		</div>
		<div class="signup" id="sign_2">
			<form action="<?=URL::site('registration/add'); ?>" method="post" enctype="multipart/form-data">
				<div>
					<input type="text" required name="org_name">
					<div class="label-box">
						<label>Название организации</label>
					</div>
				</div>
				<div>
					<input type="text" required name="lastname">
					<div class="label-box">
						<label>Фамилия</label>
					</div>
				</div>
				<div>
					<input type="text" required name="name">
					<div class="label-box">
						<label>Имя</label>
					</div>
				</div>
				<div>
					<input type="text" required name="surname">
					<div class="label-box">
						<label>Отчество</label>
					</div>
				</div>
				<div>
					<input type="text" required name="city">
					<div class="label-box">
						<label>Город</label>
					</div>
				</div>
				<div>
					<input type="text" required name="email">
					<div class="label-box">
						<label>Email</label>
					</div>
				</div>
				<div>
					<input type="password" required name="password">
					<div class="label-box">
						<label>Пароль</label>
					</div>
				</div>
				<div>
					<input type="password" required name="confirm_password">
					<div class="label-box">
						<label>Подтвердите пароль</label>
					</div>
				</div>
				<div>
					<input type="text" required name="phone">
					<div class="label-box">
						<label>Телефон</label>
					</div>
				</div>
				<div>
					<div class="label-box1">
						<input type="file" required name="logo">
						<label>Логотип организации</label>
					</div>
				</div>
				<input type="submit" name="submit" value="Регистрация">
			</form>
		</div>
	</div>
</body>
</html>