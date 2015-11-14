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
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/smart_wizard.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/main.css">
	
</head>

<body>

<div class="fakeloader"></div>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 header">
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-5">
							<div class="organization">
								<a href="" class="">
									<img class="logo_img" src="<?=$assets; ?>imgs/2.png" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="slogan">
								<span><b>Название организации:</b> <?=$org_name; ?> </span><Br>
								<span><b>Email: </b> <?=$email; ?></span> <br>
								<span><b>Название мероприятия: <?=$event; ?></b></span><br>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4 relative bleft mright">
					<div class="mrightmargin">
						<ul class="top_navigation">
							<p>Добро пожаловать, <br> <?=$username.' '.$surname.' '.$lastname; ?></p>
						</ul>
						<div class="row" >
							<div class="col-lg-12 mlist">
								<ul>
									<li>
										<i class="center1 fa fa fa-cogs fa-2x "></i>
										<div class="after">Настройки</div>
									</li>
									<li>
										<i class="center2 fa fa-info fa-2x"></i>
										<div class="after">Помощь</div>
									</li>
									<li><a href="<?=URL::site('auth/logout'); ?>">
										<i class="center3 fa fa-sign-out fa-2x"></i>
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
</div>
<br>
<header>
	<div class="row">
		<div class="col-lg-12">
			<ul class="topnavigation">
				<li class="active"><a href="">Оценивание</a></li>
				<li><a href="<?=URL::site('events/teams');?>">Команды</a></li>
				<li><a href="">Состав жюри</a></li>
				<li><a href="">Результаты</a></li>
			</ul>
		</div>
	</div>
</header>


<div class="container-fluid maincontainer">
	<div class="col-lg-3">
		<div class="row">
			<ul class="teams">
				<li>Команда ФОИСТ</li>
				<li>Команда ФИТИП</li>
				<li>Команда ФЛИСИ</li>
				<li>Команда ФИОИ</li>
				<li>Команда ИФФ</li>
			</ul>
		</div>
	</div>
	<div class="col-lg-8" style="margin-left: 10px;">
		<?=$tables; ?>
	</div>
	</div>
</div>

</body>


<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide: 1000,
            bgColor:"#3498db",
            spinner:"spinner4"
        });
    });

</script>



</html>