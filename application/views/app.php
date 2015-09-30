<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Главная страница - Страница организации</title>

	<!-- scripts -->

	<script src="<?=$assets;?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets;?>js/jquery.smartWizard.js"></script>
	<script src="<?=$assets;?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=$assets;?>bootstrap/js/npm.js"></script>
	<script src="<?=$assets;?>angular/angular.min.js"></script>
	<script src="<?=$assets;?>js/fakeloader.js"></script>

	<!--styles -->
	<link rel="stylesheet" href="<?=$assets; ?>css/smart_wizard.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/app.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body>

<div class="fakeloader"></div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 header">
			<div class="row">
				<div class="col-lg-7 organization_logo">
					<div class="row">
						<div class="col-lg-5">
							<div class="organization">
								<a href="" class="">
									<img class="logo_img" src="<?=$assets; ?>imgs/att-logo.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="slogan">
								<span><b>Название организации:</b> <?=$org_name; ?> </span><Br>
								<span><b>Email: </b> <?=$email; ?></span> <br>
								<span><b><p>Информация: </b><?=$information; ?></p></span> <br>
								<div class="">
									<input type="text" class="input-sm form-control" placeholder="Поиск мероприятий"> <br>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-lg-5 relative bleft">
					<ul class="top_navigation">
						Добро пожаловать, <br> <?=$username.' '.$lastname.' '.$surname; ?>
					</ul>
					<div class="row">
						<div class="col-lg-12 mlist">
							<ul>
								<li>
									<i class="fa fa-cog fa-3x "></i>
									<div class="after">Настройки</div>
								</li>
								<li>
									<i class="fa fa-question-circle fa-3x"></i>
									<div class="after">Помощь</div>
								</li>
								<li><a href="<?=URL::site('auth/logout'); ?>">
									<i class="fa fa-power-off fa-3x"></i>
									<div class="after">Выход</div>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<hr>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<ul class="nav nav-pills nav-stacked">
				<li id="allevents" class="active"><a href="<?=URL::site('app'); ?>"><i class="fa fa-bars"></i> Все мероприятия</a></li>
				<li id="addevent"><a href="<?=URL::site('app/event'); ?>"><i class="fa fa-plus"></i> Новое мероприятие</a></li>
				<li id="lastevents"><a href=""><i class="fa fa-spinner"></i> Пройденные мероприятия</a></li>
			</ul>
		</div>
		<div class="col-lg-9">
			<?=$table; ?>
		</div>
	</div>	
</div>

</body>


<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide: 300,
            bgColor:"#3498db",
            spinner:"spinner4"
        });
    });

</script>



</html>