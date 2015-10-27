<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мероприятие - Жюри Иван Иванович</title>

	<script type="text/javascript">
		function smena(line,number)
		{
			for(i=0; i<6; i++)
			{
				document.getElementById('r'+line+i).className = 'nactive';
			}
			document.getElementById('r'+line+number).className = 'active';
		}
	</script> <!-- line - номер критерия -->
	
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
            bgColor:"#FCC036",
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
	<link rel="stylesheet" type="text/css" href="<?=$assets;?>css/judge.css">
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
								<span><b><i>Мероприятие: <?=$event; ?></i></b></span><br>
								<span><b><i>Город: <?=$city; ?></i></b></span><br>
								<span><b><i>Начало мероприятия: <?=$start; ?></i></b></span><br>
								<span><b><i>Веб-сайт: <?=$website; ?></i></b></span>
								<br>
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
									<li><a href="<?=URL::site('app'); ?>">
										<i class="center3 fa fa-backward fa-2x"></i>
										<div class="after">Назад</div>
									</a>
									</li>
									<li><a href="<?=URL::site('auth/logout'); ?>">
										<i class="center3 fa fa-sign-out fa-2x"></i>
										<div class="after">Выход</div>
									</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<hr>	
<div class="content">
		<div class="teams">
			<center><span>Команды</span></center>
			<ul>
				<li><a href="#">ФИТИП</a></li>
				<li><a href="#">ФЛИСИ</a></li>
				<li class="active"><a href="#">ФИКТ</a></li>
			</ul>
		</div>
		<div class="rating">
			<form action="">
				<table width="100%" border="1" cellspacing="0">
				<tr>
					<td style="text-align:center;">Критерии</td>
					<td style="text-align:center;">Баллы</td>
				</tr>
				<tr>
					<td>Первый критерий</td>
					<td>
						<input type="radio" checked="checked" name="rate" id="rate0"/>
						<label id="r10" for="rate0" class="active" onclick="smena(1,0);">0</label>
						<input type="radio" name="rate" id="rate1"/>
						<label id="r11" for="rate1" class="nactive" onclick="smena(1,1);">1</label>
						<input type="radio" name="rate" id="rate2"/>
						<label id="r12" for="rate2" class="nactive" onclick="smena(1,2);">2</label>
						<input type="radio" name="rate" id="rate3"/>
						<label id="r13" for="rate3" class="nactive" onclick="smena(1,3);">3</label>
						<input type="radio" name="rate" id="rate4"/>
						<label id="r14" for="rate4" class="nactive" onclick="smena(1,4);">4</label>
						<input type="radio" name="rate" id="rate5"/>
						<label id="r15" for="rate5" class="nactive" OnClick="smena(1,5)">5</label>
						
					</td>
				</tr>
				<tr>
					<td>Второй критерий</td>
					<td><input type="number" name=""></td>
				</tr>
				<tr>
					<td>Третий критерий</td>
					<td>
						<select name="">
							<option selected>0</option>
							<option>1</option>
							<option>2</option>
						</select>
					</td>
				</tr>
			</table><br>
			<center><input type="submit"></center>
		</form>
		</div>
<!--
<div class="main">
	<div class="logo">
		<img src="<?=$uploads.'/'.$logo;?>" class="logo">
		
		<div class="profile">
			<span>Добро пожаловать, Иван Иванович</span>
			<br>
			<a href="#">Настройки</a>
			<a href="#">Выход</a>
		</div>
	</div>
	
	</div>
<div>

-->
</body>
</html>
