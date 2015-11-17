<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мероприятие</title>

	<script src="<?=$assets; ?>js/jquery-1.11.3.js"></script>
	<script src="<?=$assets;?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets;?>js/jquery.smartWizard.js"></script>
	<script src="<?=$assets;?>bootstrap/js/bootstrap.js"></script>
	<script src="<?=$assets;?>bootstrap/js/npm.js"></script>
	<script src="<?=$assets;?>angular/angular.min.js"></script>
	<script src="<?=$assets;?>js/fakeloader.js"></script>
	<script src="<?=$assets; ?>js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
	<!--<script src="<?=$assets;?>js/dropzone.js"></script>-->
	
	<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide: 0,
            bgColor:"#FCC036",
            spinner:"spinner6"
        });
    });

</script>

	<!--styles -->
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/dropzone.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets;?>css/judge.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	
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
									</li>
									<li>
										<i class="center2 fa fa-info fa-2x"></i>
									</li>
									<li><a href="<?=URL::site('app'); ?>">
										<i class="center3 fa fa-backward fa-2x"></i>
									</a>
									</li>
									<li><a href="<?=URL::site('auth/logout'); ?>">
										<i class="center3 fa fa-sign-out fa-2x"></i>
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
					<ul id="sortable" class="team_list">
						<? for($i = 0; $i < count($teams); $i++): ?>
							<li id="i_<?=$teams[$i]['id']; ?>">
								<a>
									<?=$teams[$i]['name']; ?>
								</a>
							</li>
						<? endfor ?>
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
		<div class="col-lg-9">
			<?=$addCriteria; ?>
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
        	<input type="hidden" id="id_event" name="id_event" value="<?=$id_event; ?>">
        	<div class="form-group">
        		<label for="">Название команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="Введите название команды" id="team_name" required>
        	</div>	
        	<div class="form-group">
        		<label for="">Описание команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="Описание команды" id="team_desc" required>
        	</div>
        	<hr>
        	<div class="form-group">
        		<label for="">Добавить участников:</label>
        	</div>
        	<div class="row">
        		<ul class="new_participant">
        			<li id="new_participant">
        				<div class="new_participant_button">
        					<i class="fa fa-plus fa-3x"></i>
        				</div>
        			</li>
        			<!--<li class='added'>
	        			<div class='new_participants'>
	        			<div id="removable" class="pull pull-right glyphicon glyphicon-remove"></div>
	        			<img class='default_logo' src='<?=$uploads; ?>unknown.jpg'>
	        			</div>
	        			<div class='row'>
	        			<div class='col-lg-12 zaeb'>
	        			<form action=''>
	        			<div class='row'>
	        			<input type='text' id='p"+id+"' class='form-control input-sm' placeholder='ФИО Участника' ></div>
	        			<div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r"+id+"'></div>
	        			<div class='row'><input type='text' id='e"+id+"'class='form-control input-sm' placeholder='Email'></div>
	        			</form>
	        			</div>
        			</div>
        			</li>-->
        		</ul>
        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="rm_all" class="btn btn-default" data-dismiss="modal">Закрыть окно</button>
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

<!-- EXAMPLE -->
<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        		<input type="text" class="form-control input-sm" placeholder="Введите название команды" id="team_name" required>
        	</div>	
        	<div class="form-group">
        		<label for="">Описание команды:</label>
        		<input type="text" class="form-control input-sm" placeholder="Описание команды" id="team_desc" required>
        	</div>
        	<!--<div class="form-group">
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
        	</div>-->
        	<hr>
        	<div class="form-group">
        		<label for="">Добавить участников:</label>
        	</div>
        	<div class="row">
        		<ul class="new_participant">
        			<li id="new_participant">
        				<div class="new_participant_button">
        					<i class="fa fa-plus fa-3x"></i>
        				</div>
        			</li>
        		</ul>
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

<script>
	$(document).ready(function() {
		
		var i = -1;
		var arr = Array();
		var ur = location.protocol+'//'+location.hostname+'/proNWE';

		$( "#sortable" ).sortable({
			change: function(event, ui) {
				i = -1;
				arr = [];
			},
			update: function(event, ui) {
				$("#sortable").find("li").each(function() {
					i ++;
					arr[i] = $(this).attr('id');
				});
				arr[i + 1] = $('#id_event').val();
				// Send positions;
				$.ajax({
					type: "POST",
					url: ur+'/teams/sort/',
					data: {
						'teams': arr,
					},
					success: function(result) {
					}
				});
			}
		});

   		$( "#sortable" ).disableSelection();
	});
</script>


<script src="<?=$assets; ?>scripts.js"></script>
<!-- WORKING WITH Teams (add) -->
<script>
	$(document).ready(function() {

		$('#add_team').on('click', function() {
			$('#add_team_modal').modal({
				keyboard: true
			});
		});

		$('#add_team_modal').on('hidden.bs.modal', function (e) {

		  	//$('#closed').modal('show')
		  	//setTimeout(function() {
			  //  $('#closed').modal('hide');
			//}, 2000);
		});

		var id = -1;
		var new_p = Array();
		var falses = 0;

		$('#add_team_modal #new_participant').on('click', function() {
			id ++;
			var li = "<li class='added'><div class='new_participants'><div id='removable"+id+"' class='pull pull-right glyphicon glyphicon-remove rm_participant'></div><img class='default_logo' src='<?=$uploads; ?>unknown.jpg'></div><div class='row'><div class='col-lg-12 zaeb'><form action=''><div class='row'><input type='text' id='p"+id+"' class='form-control input-sm' placeholder='ФИО Участника' ></div><div class='row'><input type='text' class='form-control input-sm' placeholder='Роль' id='r"+id+"'></div><div class='row'><input type='text' id='e"+id+"'class='form-control input-sm' placeholder='Email'></div></form></div></div></li>";
			
			$('li#new_participant').after(li);

			$('.rm_participant').on('click', function() {
				var rm_id = $(this).attr('id');

				$($('#'+rm_id).parents('li')).remove();
			});	

			$('#rm_all').on('click', function() {
				$('.added').each( function() {
					$(this).remove()
				});
			});
		});



		$('#save_team').click(function() {

				falses = -2;
				validation();
				if (falses != 0) {
					return false;
				}
					
					for(var i = 0; i <= id; i++)
					{
						new_p[i] = {
							pname: $('#p'+i).val(),
							prole: $('#r'+i).val(),
							pemail: $('#e'+i).val(),
						};
					}

					var team = new Array($('#team_name').val(), $('#team_desc').val(), $('#id_event').val());


					var t_data = team;
					var p_data = JSON.stringify(new_p);
					

					var ur = location.protocol+'//'+location.hostname+'/proNWE';

					$.ajax({
						type: "POST",
						data: {
							't_data': t_data,
							'p_data': p_data,
						},
						url: ur+'/teams/addteam/',
						success: function(result){
							if (result)
							{
								$('#add_team_modal').modal({ keyboard: false }).find('.modal-body').hide(250).delay(400).queue( function() {
								$('#add_team_modal .modal-body').html("<p style='color: green; font-weight: bold'>ОК! Готово...</p>").show(200); }).dequeue();
								
								setTimeout("$('#add_team_modal').modal('hide')", 1300);

								function Goback() {
									$('#add_team_modal').html($('#example').html());	
								} 
								setTimeout(Goback, 2000);

								setTimeout("window.location.reload()", 2000);
							}
						}
					});
					
				});

		function validation()
		{
			$('input[type=text]').each( function() {
				var value = $(this).val();

				$('input[type=text]').on("change", function() {
					if ($(this).val() != '') {
						falses --;
						$(this).css('border', '1px solid green');
					}
					else {
						falses++;
						$(this).css('border', '1px solid red');
					}
				});

				if (value == '')
				{
					falses++;
					$(this).css('border', '1px solid red');
				}
				else 
				{
					falses--;
					$(this).css('border', '1px solid green');
				}
			});
		}
	});
</script>
</body>
</html>
