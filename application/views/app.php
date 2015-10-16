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
	<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide: 1300,
            bgColor:"#3498db",
            spinner:"spinner6"
        });
    });

</script>

	<!--styles -->
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/smart_wizard.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
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
									<img class="logo_img" src="<?=$uploads; ?><?=$logo;?>" alt="">
								</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="slogan">
								<span><b>Название организации:</b> <?=$org_name; ?> </span><Br>
								<span><b>Email: </b> <?=$email; ?></span> <br>
								<br>
								<div>
									<input type="text" class="input-sm form-control" placeholder="Поиск мероприятий"> <br>
								</div>
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

<div style="margin-top: 10px;"></div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<ul class="nav nav-pills nav-stacked">
				<li id="allevents"><a href="<?=URL::site('app'); ?>"><i class="fa fa-bars"></i> Все мероприятия</a></li>
				<li id="current"><a href="<?=URL::site('app/current'); ?>"><i class="fa fa-paper-plane"></i> Текущие мероприятия</a></li>
				<li id="lastevents"><a href="<?=URL::site('app/pastevents'); ?>"><i class="fa fa-history"></i> Прошедшие мероприятия</a></li>
				<li id="addevent"><a href="<?=URL::site('app/newevent'); ?>"><i class="fa fa-plus"></i> Новое мероприятие</a></li>
			</ul>
		</div>
		<div class="col-lg-9">
			<?=$table; ?>
		</div>
	</div>	
</div>

</body>

</html>