<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>NoteWorthyEvent - События, заслуживающие внимания</title>
	<meta name="author" content="NoteWortyEvent" />
	<meta name="description" content="Сайт, который помогает организаторам проводить мероприятия на престижном уровне" />
	<meta name="keywords"  content="noteworthy,noteworthyevent,event,событие,встреча,мероприятие,участники,жюри,организаторы,рейтинг,выставления баллов,сайт мероприятия" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" href="<?=$assets; ?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/examples.css" />
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>-->
	<script src="<?=$assets; ?>/js/jquery-1.11.3.js"></script>
	<script src="<?=$assets; ?>/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script src="<?=$assets; ?>bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?=$assets; ?>js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?=$assets; ?>js/examples.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered':true,
				'css3': true,
				'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
				'navigation': true,
				'navigationPosition': 'right',

				afterRender: function(){
					//playing the video
					$('video').get(0).play();
				}
			});
		});
	</script>

</head>
<body>

<div id="fullpage">

	
	<!-- SECTION 1 -->
	<div class="section" id="section0">
		<?=$section1; ?>
	</div>

	<!-- SECTION 2 
	<div class="section" id="section0">
		<?=$section2; ?>
	</div>-->

	<!-- SECTION 3 -->
	<div class="section" id="section3">
		<?=$section3; ?>
	</div>

	<!-- SECTION 4 -->
	<div class="section moveDown" id="section4">
		<?=$section4; ?>
	</div>

</div>

</body>

</html>
