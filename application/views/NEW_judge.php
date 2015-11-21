<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мероприятие</title>

	<script src="<?=$assets; ?>js/jquery-1.11.3.js"></script>
	<script src="<?=$assets;?>js/jquery-1.11.3.min.js"></script>
	<script src="<?=$assets;?>js/jquery.smartWizard.js"></script>
	<script src="<?=$assets;?>uikit/js/uikit.js"></script>
	<script src="<?=$assets; ?>scripts.js"></script>
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
	<link rel="stylesheet" href="<?=$assets; ?>uikit/css/uikit.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/fakeloader.css">
	<link rel="stylesheet" href="<?=$assets; ?>css/dropzone.css">
	<link rel="stylesheet" href="<?=$assets;?>css/judge.css">
	<link rel="stylesheet" href="<?=$assets;?>css/pronwe.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body class="pronwe-background-judge">

<div class="fakeloader"></div>

<div class="pronwe-header">
	<div class="uk-grid">
		<div class="uk-width-medium-3-10 uk-width-small-1-1 uk-width-1-1">
			<div class="uk-panel uk-panel-header">
				<a href="">
					<img class="pronwe-logo_img" src="<?=$uploads; ?><?=$logo;?>" alt="">
				</a>
			</div>
		</div>
		<div class="uk-width-medium-4-10 uk-width-small-1-2 uk-width-1-1">
			<div class="uk-panel uk-panel-header pronwe-heder-description">
				<span><b>Мероприятие: </b> <?=$event; ?></span><br>
				<span><b>Город: </b> <?=$city; ?></span><br>
				<span><b>Сегодня: </b> <?=$start; ?></span><br>
			</div>
		</div>
		<div class="uk-width-medium-3-10 uk-width-small-1-2 uk-width-1-1">
			<div class="uk-panel uk-panel-header pronwe-navigation uk-text-center">
				<div class="uk-width-1-1 uk-text-left">
					<p>Добро пожаловать, <br> <?=$lastname.' '.$username.' '.$surname; ?></p>
				</div>
				<div class="uk-width-1-1 uk-text-center">
					<div class=" pronwe-my_topmenu">
						<a href="#Judge_FAQ" data-uk-modal class="uk-icon-info uk-icon-medium"></a>
					</div>
					<div class="pronwe-my_topmenu">
						<a href="<?=URL::site('auth/logout'); ?>" class="uk-icon-sign-out uk-icon-medium"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pronwe-judge-page">
	<div class="uk-grid">
		<div class="uk-width-large-1-3 uk-width-medium-1-3 uk-width-small-1-2 uk-width-1-1">
			<div class="uk-panel">
				<div class="team_button">
					Участники
				</div>
				<br>
				<div class="teams">
					<ul id="sortable" class="team_list">
						<? for($i = 0; $i < count($teams); $i++): ?>
						<li id="i_<?=$teams[$i]['id']; ?>">
							<button class="uk-button" data-uk-toggle="{target:'i_<?=$teams[$i]['id']; ?>'}"><?=$teams[$i]['name']; ?></button>			</li>
						<? endfor ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="uk-width-large-2-3 uk-width-medium-2-3 uk-width-small-1-2 uk-width-1-1">
			<div class="uk-grid uk-grid-preserve">
				<div class="uk-width-large-1-1 uk-width-medium-1-1 uk-width-small-1-1 uk-width-1-1">
					<div class="uk-panel">
						<?=$addCriteria; ?>
					</div>
				</div>
			</div>
		</div>		
</div>
	</div>
</body>

<script>
	$(document).ready(function() {
		var i = -1;
		var arr = Array();
		var ur = location.protocol+'//'+location.hostname+'/proNWE';
	});

	$(document).ready(function() {
		$('#add_team').on('click', function() {
			$('#add_team_modal').modal({
				keyboard: true
			});
		});
</script>

<!-- FUDGE FAQ -->
<div id="Judge_FAQ" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        Прописать FAQ для жюри!
    </div>
</div>
</html>