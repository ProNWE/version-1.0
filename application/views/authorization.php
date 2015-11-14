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
		<i class="pos fa fa-home fa-5x"> </i>
		</a>
	</div>
	
	<div id="signinup">
		<button type="button" class="btn-link button2" data-toggle="modal" data-target=".login">Авторизация</button>	
		<button type="button" class="btn-link button2" data-toggle="modal" data-target=".registration">Регистрация</button>	
	</div>

	<!-- MODAL LOGIN -->
	<div class="modal fade login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel1">Авторизация</h4>
				</div>
				<div class="modal-body" id="sign_1">
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
					
				</div>
				<div class="modal-footer">
			        <button type="submit" class="btn btn-sm btn-primary col-lg-12">Войти</button>
				</div>
					</form>
			</div>
		</div>
	</div>

	<!-- MODAL REGISTRATION -->
	<div class="modal fade registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel2">Регистрация</h4>
				</div>
				<div class="modal-body" id="sign_2">
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
						<input type="hidden" required name="address" value=" ">
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
						<input type="password" required name="password" id="password">
						<div class="label-box">
							<label>Пароль</label>
						</div>
					</div>
					<div>
						<input type="password" required name="confirm_password" id="confirm_password">
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
					<br>
					<div>
						<div class="label-box1">
							<input type="file" required name="logo">
							<label>Логотип организации</label>
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" id="confirm_button" disabled>Зарегистрироваться</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- SCRIPT -->
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
	</script>
	<script>
		var button = document.getElementById("confirm_button");
		$('#confirm_password').on('change', function() {
			var conf = $(this).val();
			var pass = $('#password').val();

			if (conf == pass && pass.length > 1)
			{	
				$(this).css('background-color', 'rgba(0, 200, 0, 0.3)');
				button.disabled = false;				
			}
			else 
			{
				$(this).css('background-color', 'rgba(200, 0, 0, 0.3)');
				button.disabled = true;
			}
		});

		$('#password').on('change', function() {
			var conf = $('#confirm_password').val();
			var pass = $(this).val();

			if (conf == pass && conf.length > 1)
			{	
				$('#confirm_password').css('background-color', 'rgba(0, 200, 0, 0.3)');
				button.disabled = false;
			}
			else 
			{
				$('#confirm_password').css('background-color', 'rgba(200, 0, 0, 0.3)');
				button.disabled = true;				
			}
		});
		
	</script>

</body>
</html>