<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Оценивание участников</title>

	<!-- scripts -->
	<script src="<?=$assets; ?>js/jquery-1.11.3.js"></script>
	<script src="<?=$assets;?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets;?>bootstrap/js/bootstrap.js"></script>
	<script src="<?=$assets;?>bootstrap/js/npm.js"></script>
	<script src="<?=$assets;?>angular/angular.min.js"></script>
	<script src="<?=$assets;?>js/jquery.smartWizard.js"></script>
	<script src="<?=$assets;?>angular/angular.min.js"></script>
	<script src="<?=$assets;?>js/fakeloader.js"></script>
	<script src="<?=$assets; ?>js/jquery-ui-1.11.4.custom/jquery-ui.js"></script>
	
	<!--styles -->
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/dropzone.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/mister.css">

</head>
<body>
	<header>
		<a href="" class="btn1 hidden-xs"></a>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-xs-4 col-sm-4">
				<div class="logo">
					<img src="<?=$uploads; ?>/flat_gold.png" alt="" class="event_logo">
				</div>
			</div>
			<div class="col-lg-8 col-xs-8">
				<h1 class="organization">Университет ИТМО </h1>
				<h2 class="event">Мистер ИТМО</h2>
				<input type="hidden" name="judge" value="<?=$id; ?>" id="id_judge">
				<input type="hidden" name="event" value="<?=$id_event; ?>" id="id_event">
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-lg-offset-1 content">
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills nav-justified" role="tablist" id="myTab">
							<li role="presentation" class="active"><a href="#step1" aria-controls="home" role="tab" data-toggle="tab"><b>Этап №1 </b></a></li>
							<li role="presentation"><a href="#step2" aria-controls="home" role="tab" data-toggle="tab"><b>Этап №2 </b></a></li>
							<li role="presentation"><a href="#step3" aria-controls="home" role="tab" data-toggle="tab"><b>Этап №3 </b></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-lg-offset-1 tab-content">

			<!-- TAB PANEL 1 -->		
					  <div role="tabpanel" class="tab-pane fade in active" id="step1">
					  	<hr>
					 	<div class="row">
					  		<div class="col-lg-11">
					  			<div class="alert alert-info">
					  				<b>Этап 1: Комментарий к этому этапу</b>
					  			</div>
					  		</div>
					  	</div>
					  	<form id="form1" action="">
					  		<div class="form-group">
					  		<? for($i = 0; $i < count($teams); $i++): ?>
					  			<div class="row participants">
					  				<div class="col-lg-2 col-md-3 col-xs-4">
					  					<img src="<?=$uploads; ?>/unknown.jpg" alt="" class="participant-img img-thumbnail">
					  				</div>
					  				<div id="e1_p_<?=$teams[$i]['id'];?>" class="col-lg-6 col-md-6 col-xs-8 criteria">
					  					<label for="">ФИО УЧАСТНИКА:</label>
										<p><b><?=$teams[$i]['name']; ?></b></p>
										<p><?=$teams[$i]['description']; ?></p>
					  					<div class="btn-group" data-toggle="buttons">
					  					  <label id="1" class="btn btn-primary active">
										    <input type="radio" name="criteria1" id="option0-" autocomplete="off" value="0" checked> 0 
										  </label>
										  <label id="2" class="btn btn-primary">
										    <input type="radio" name="criteria1" id="option1-" autocomplete="off" value="1"> 1
										  </label>
										  <label id="3" class="btn btn-primary">
										    <input type="radio" name="criteria1" id="option2-" autocomplete="off" value="2"> 2 
										  </label>
										  <label id="4" class="btn btn-primary">
										    <input type="radio" name="criteria1" id="option3-" autocomplete="off" value="3"> 3 
										  </label>
										  <label id="5" class="btn btn-primary">
										    <input type="radio" name="criteria1" id="option4-" autocomplete="off" value="4"> 4 
										  </label>
										  <label id="6" class="btn btn-primary">
										    <input type="radio" name="criteria1" id="option5-" autocomplete="off" value="5"> 5 
										  </label>
										</div>
					  				</div>
					  			</div>
					  		<? endfor ?>
					  		</div>
					  	</form>
					  	<div class="row-fluid">
					  		<div class="col-lg-11">
					  			<div class="pull pull-right">
					  				<button class="btn btn-primary" id="Tostep2">Следующий этап</button>
					  			</div>
					  		</div>
					  	</div>
					  </div>
				<!-- TAB PANEL 2 -->
					  <div role="tabpanel" class="tab-pane fade" id="step2">
					  	<hr>
					 	<div class="row">
					  		<div class="col-lg-11">
					  			<div class="alert alert-info">
					  				<b>Этап 2: Комментарий к этому этапу</b>
					  			</div>
					  		</div>
					  	</div>
					  	<form id="form2" action="">
					  		<div class="form-group">
					  		<? for($i = 0; $i < count($teams); $i++): ?>
					  			<div class="row participants">
					  				<div class="col-lg-2 col-md-3 col-xs-4">
					  					<img src="<?=$uploads; ?>/unknown.jpg" alt="" class="participant-img img-thumbnail">
					  				</div>
					  				<div id="e2_p_<?=$teams[$i]['id'];?>" class="col-lg-6 col-md-6 col-xs-8 criteria">
					  					<label for="">ФИО УЧАСТНИКА:</label>
										<p><b><?=$teams[$i]['name']; ?></b></p>
										<p><?=$teams[$i]['description']; ?></p>
					  					<div class="btn-group" data-toggle="buttons">
					  					  <label class="btn btn-primary active">
										    <input type="radio" name="criteria2" id="option1" autocomplete="off" value="0" checked> 0 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria2" id="option1" autocomplete="off" value="1"> 1
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria2" id="option2" autocomplete="off" value="2"> 2 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria2" id="option3" autocomplete="off" value="3"> 3 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria2" id="option3" autocomplete="off" value="4"> 4 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria2" id="option3" autocomplete="off" value="5"> 5 
										  </label>
										</div>
					  				</div>
					  			</div>
					  		<? endfor ?>
					  		
					  		</div>
					  	</form>
					  	<div class="row-fluid">
					  		<div class="col-lg-11">
					  			<div class="pull pull-right">
					  				<button class="btn btn-primary" id="Tostep3">Следующий этап</button>
					  			</div>
					  		</div>
					  	</div>
					  </div>

				<!-- TAB PANEL 3 -->
					  <div role="tabpanel" class="tab-pane fade" id="step3">
					  		<hr>
						 	<div class="row">
						  		<div class="col-lg-11">
						  			<div class="alert alert-info">
						  				<b>Этап 3: Комментарий к этому этапу</b>
						  			</div>
						  		</div>
						  	</div>
					  		<form id="form3" action="">
					  		<div class="form-group">
					  		<? for($i = 0; $i < count($teams); $i++): ?>
					  			<div class="row participants">
					  				<div class="col-lg-2 col-md-3 col-xs-4">
					  					<img src="<?=$uploads; ?>/unknown.jpg" alt="" class="participant-img img-thumbnail">
					  				</div>
					  				<div id="e3_p_<?=$teams[$i]['id'];?>" class="col-lg-6 col-md-6 col-xs-8 criteria">
					  					<label for="">ФИО УЧАСТНИКА:</label>
										<p><b><?=$teams[$i]['name']; ?></b></p>
										<p><?=$teams[$i]['description']; ?></p>
					  					<div class="btn-group" data-toggle="buttons">
					  					  <label class="btn btn-primary active">
										    <input type="radio" name="criteria3" id="option1" autocomplete="off" value="0" checked> 0 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria3" id="option1" autocomplete="off" value="1"> 1
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria3" id="option2" autocomplete="off" value="2"> 2 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria3" id="option3" autocomplete="off" value="3"> 3 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria3" id="option3" autocomplete="off" value="4"> 4 
										  </label>
										  <label class="btn btn-primary">
										    <input type="radio" name="criteria3" id="option3 tt" autocomplete="off" value="5"> 5 
										  </label>
										</div>
					  				</div>
					  			</div>
					  		<? endfor ?>
					  		
					  		</div>
					  	</form>
					  	<div class="row-fluid">
					  		<div class="col-lg-11">
					  			<div class="pull pull-right">
					  				<a class="btn btn-primary" id="Toresult">Посмотреть результаты</a>
					  			</div>
					  		</div>
					  	</div>
					  </div>

					</div>
				</div>
			</div>
		</div>
	</div>
<hr>
</body>

<script>
	$(document).ready( function() {
		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show');
		});

		$('#Tostep2').click( function() {
			$("#myTab a[href='#step2']").tab('show');
		});

		$('#Tostep3').click( function() {
			$("#myTab a[href='#step3']").tab('show');
		});
	});
</script>

<script>
	$(document).ready( function() {

		var url = location.protocol+'//'+location.hostname+'/proNWE';
		var id_judge = $('#id_judge').val();
		var id_event = $('#id_event').val();


		$('#form1 input').on('change', function() {
			var value = $('input[name="criteria1"]:checked', '#form1').val();
			var data = $('input[name="criteria1"]:checked', '#form1').parents("div").parents("div").attr("id");
			var list = data.split('_');

			var id_participant = list[2];
			var datasend = {
					id_participant: id_participant,
					id_judge: id_judge,
					id_criteria: 1,
					score: value, 
				};
			
			if (value != 0)
			{
				$.ajax({
					url: url+'/Countscores/addscore',
					type: "POST",
					data: {
						scores: JSON.stringify(datasend),
					},
					success: function(result) {
						//alert(result);
					},
				});
			}
			
		});


		// FORM 2
		$('#form2 input').on('change', function() {
			var value = $('input[name="criteria2"]:checked', '#form2').val();
			var data = $('input[name="criteria2"]:checked', '#form2').parents("div").parents("div").attr("id");
			
			var list = data.split('_');
			var id_participant = list[2];
		
			var datasend = {
					id_participant: id_participant,
					id_judge: id_judge,
					id_criteria: 2,
					score: value, 
				};	
			if (value != 0)
			{
				$.ajax({
					url: url+'/Countscores/addscore',
					type: "POST",
					data: {
						scores: JSON.stringify(datasend),
					},
					success: function(result) {
						//alert(result);
					},
				});
			}
		});

		// FORM 3
		$('#form3 input').on('change', function() {
			var value = $('input[name="criteria3"]:checked', '#form3').val();
			var data = $('input[name="criteria3"]:checked', '#form3').parents("div").parents("div").attr("id");
			
			var list = data.split('_');
			var id_participant = list[2];
		
			var datasend = {
					id_participant: id_participant,
					id_judge: id_judge,
					id_criteria: 3,
					score: value, 
				};	
			if (value != 0)
			{
				$.ajax({
					url: url+'/Countscores/addscore',
					type: "POST",
					data: {
						scores: JSON.stringify(datasend),
					},
					success: function(result) {
						//alert(result);
					},
				});
			}
		});
	});
</script>


</html>