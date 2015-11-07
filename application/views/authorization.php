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
	function sh(num)
	{
		document.getElementById("sp_"+"1").style.display = "none";
		document.getElementById("sp_"+"2").style.display = "none";
		document.getElementById("sp_"+num).style.display = "block";
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
	<div id="login1">
		<div class="button2" id="login"><a href="javascript:sh('1')"><center>Вход</center></a></div>
		<div class="button2" id="register"><a href="javascript:sh('2')"><center>Регистрация</center></a></div>
		
		<div class="signin" id="sp_1">
			<form action="<?=URL::site('auth/auth'); ?>" method="post">
				<input type="text" required name="login" id="i1">
				<div class="label-box" id="lb1">
					<label>E-mail</label>
				</div>
				<input type="password" required name="password" id="i2">
				<div class="label-box" id="lb2">
					<label>Пароль</label>
				</div>
				<input type="submit" name="submit" value="Войти">
			</form>
		</div>
		
		<div class="signup" id="sp_2">
			<form action="<?=URL::site('registration/add'); ?>" method="post" enctype="multipart/form-data">
				<input type="text" required name="org_name" id="i3"><br>
				<div class="label-box" id="lb3">
					<label>Название организации</label>
				</div>
				<input type="text" required name="lastname" id="i4"><br>
				<div class="label-box" id="lb4">
					<label>Фамилия</label>
				</div>
				<input type="text" required name="name" id="i5"><br>
				<div class="label-box" id="lb5">
					<label>Имя</label>
				</div>
				<input type="text" required name="surname" id="i6"><br>
				<div class="label-box" id="lb6">
					<label>Отчество</label>
				</div>
				<input type="text" required name="city" id="i7"><br>
				<div class="label-box" id="lb7">
					<label>Город</label>
				</div>
				<input type="hidden" name="address" value="spb">
				<label>Логотип организации</label>
				<input type="file" required name="logo"><br>
				<div class="label-box" id="lb7">
				</div>
				<input type="text" required name="email" id="i8"><br>
				<div class="label-box" id="lb8">
					<label>Email</label>
				</div>
				<input type="password" required name="password" id="i9"><br>
				<div class="label-box" id="lb9">
					<label>Пароль</label>
				</div>
				<input type="password" required name="confirm_password" id="i10"><br>
				<div class="label-box" id="lb10">
					<label>Подтвердите пароль</label>
				</div>
				<input type="text" required name="phone" id="i11"><br>
				<div class="label-box" id="lb11">
					<label>Телефон</label>
				</div>
				<input type="submit" name="submit" value="Регистрация">
			</form>
		</div>
	</div>
</body>
</html>
