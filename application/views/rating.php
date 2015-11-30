<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Результаты <?=$event; ?></title>

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
	
	<header class="rating">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-3">
				<img src="<?=$uploads; ?>/flat_gold.png" alt="" width="100%">
			</div>
			<div class="col-lg-offset-2">
				<h2>Результаты конкурса</h2>
				<h1><?=$event; ?></h1>
			</div>
		</div>
	</header>
	<hr>
	<div class="container">
	<? for($i = 0; $i < count($teams); $i++) : 

		$scores = Model_Scores::Instance();

		$stage1 = $scores->getScore($teams[$i]['id'], 1);
		$stage2 = $scores->getScore($teams[$i]['id'], 2);
		$stage3 = $scores->getScore($teams[$i]['id'], 3);

		$percentage1 = ($stage1 / 35) * 100;
		$percentage2 = ($stage2 / 42) * 100;
		$percentage3 = ($stage3 / 56) * 100;

		$sum = $stage1 + $stage2 + $stage3;
		$percentage = ($sum / 133) * 100;

	?>
	<div class="participant-rating-item">
		<div class="row">
			<div class="col-lg-2">
				<img src="<?=$uploads;?>/unknown.jpg" alt="" class="participant_img">
			</div>
			<div class="col-lg-9">
				<span class="participant-rating-name"><?=$teams[$i]['name'];?></span>
				<br>
				<div class="row">
					<div class="col-lg-4 rating-stages">Конкурс "Образы"</div>
					<div class="col-lg-6">
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$percentage1; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percentage1;?>%;">
						    <?=$percentage1; ?> %
						  </div>
						</div>
					</div>
					<div class="col-lg-1 rating-score">
						<span style="color: green;"><?=$stage1; ?></span>/35
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 rating-stages">Конкурс "Творческие номера"</div>
					<div class="col-lg-6">
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$percentage2; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percentage2; ?>%;">
						    <?=$percentage2; ?> %
						  </div>
						</div>
					</div>
					<div class="col-lg-1 rating-score">
						<span style="color: green;"><?=$stage2; ?></span>/42
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 rating-stages">Конкурс "Спортивно-интеллектуальный"</div>
					<div class="col-lg-6">
						<div class="progress">
						  <div class="progress-bar" role="progressbar" aria-valuenow="<?=$percentage3; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percentage3; ?>%;">
						    <?=$percentage3; ?>%
						  </div>
						</div>
					</div>
					<div class="col-lg-1 rating-score">
						<span style="color: green;"><?=$stage3; ?></span>/56
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-3 rating-stages">Суммарный бал за весь конкурс:</div>
				<div class="col-lg-7">
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="<?=$percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$percentage; ?>%;">
							<?=$percentage; ?> %
						</div>
					</div>
				</div>
				<div class="col-lg-1 rating-score">
					<span style="color: green;"><?=$sum; ?></span>/133
				</div>
		</div>
		</div>
	<? endfor ?>
	</div>

</body>

<script>
	$(document).ready( {
		function update()
		{

		}
	});
</script>


</html>