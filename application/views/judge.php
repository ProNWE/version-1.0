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
<br>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<div class="team_button">
				Команды
			</div>

			<br>

			<div class="row">
				<div class="teams">
					<ul class="team_list">
						<li>
							<a href="">
								Команда номер №1
							</a>
						</li>
						<li >
							<a href="">
								Команда номер №2
							</a>
						</li>
						<li id="add_team">
							<a>
								<span class="glyphicon glyphicon-plus"> </span>
								Добавить команду
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-9 border">
			Container
		</div>
	</div>
</div>



<!-- MODAL -->
<div class="modal fade" id="add_team_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Добавить команду</h4>
      </div>
      <div class="modal-body">
        <form action="">
        	<div class="form-group">
        		<label for="">Название команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="Введите название команды" required>
        	</div>	
        	<div class="form-group">
        		<label for="">Описание команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="Описание команды" required>
        	</div>
        	<div class="form-group">
        		<label for="">Капитан команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="ФИО Капитана команды" required>
        	</div>
        	<br>
        	<div class="row">
        		<div class="col-lg-6">
        			<label for="">Контакты:</label>
        			<input type="text" class="form-control input-sm" placeholder="Номер телефона или эл.почта">
        		</div>
        		<div class="col-lg-6">
        			<label for="">Страница в Соц.сетях:</label>
        			<input type="text" class="form-control input-sm" placeholder="страница в социальных сетях">
        		</div>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть окно</button>
        <button type="button" id="save_team" class="btn btn-orange">Сохранить</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL CLOSED -->
<div class="modal fade" id="closed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Отмена добавления</h4>
      </div>
      <div class="modal-body">
        Данные которые вы ввели не были сохранены, вам придется все заполнить повторно.	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-orange">ОК</button>
      </div>
    </div>
  </div>
</div>
<script>
	$(document).ready(function() {
		$('#add_team').on('click', function() {
			$('#add_team_modal').modal({
				keyboard: true
			});
		});


		$('#save_team').on('click', function() {

			$('#add_team_modal').modal({ keyboard: false }).find('.modal-body').hide(250).delay(1000).queue( function() {
					$('#add_team_modal .modal-body').html("Обрабатывается...").show(200); }).dequeue();
		});

		$('#add_team_modal').on('hidden.bs.modal', function (e) {

		  	$('#closed').modal('show')
		  	setTimeout(function() {
			    $('#closed').modal('hide');
			}, 2000);
		});
	});
</script>
</body>
</html>
