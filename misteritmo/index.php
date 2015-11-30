<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Мистер ИТМО</title>
	<meta name="Resource-type" content="Document">

	<?php
		$url = "http://".$_SERVER['SERVER_NAME'].'/proNWE/';
	?>

	<link rel="stylesheet" type="text/css" href="assest/css/misteritmo-main.css">
	<link rel="stylesheet" href="assest/uikit/css/uikit.css">
	<link rel="icon" type="image/png" href="assest/imgs/misteritmo.png">

	<!--<script src="http://localhost/misteritmo/assets/uikit/js/uikit.js"></script>
	<script src="http://localhost/misteritmo/assest/uikit/js/uikit.min.js"></script>-->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?=$url;?>assets/uikit/js/uikit.js"></script>    <!-- ЗДЕСЬ КОСЯК! БЕЗ ЭТОГО МОДАЛКА НЕ ОТКРЫВАЕТСЯ -->

</head>
<body>
<div class="uk-grid">
	<div class="mistermenu uk-width-2-10" style="margin-top:-20px; padding:10px;">
		<div class="uk-panel uk-text-center misters">
			<ul>
				<li><img src="assest/imgs/misteritmo.png"></li>
				<li><a href="#partisipant1" data-uk-modal><img src="assest/imgs/participants/1.jpg"><span>ФХКТиК</span></a></li>
				<li><a href="#partisipant2" data-uk-modal><img src="assest/imgs/participants/2.jpg"><span>ФТМиИ</span></a></li>
				<li><a href="#partisipant3" data-uk-modal><img src="assest/imgs/participants/3.jpg"><span>ФЛиСИ</span></a></li>
				<li><a href="#partisipant4" data-uk-modal><img src="assest/imgs/participants/4.jpg"><span>ФФиОИ</span></a></li>
				<li><a href="#partisipant5" data-uk-modal><img src="assest/imgs/participants/5.jpg"><span>ФПБИ</span></a></li>
				<li><a href="#partisipant6" data-uk-modal><img src="assest/imgs/participants/6.jpg"><span>ФКТиУ</span></a></li>
				<li><a href="#partisipant7" data-uk-modal><img src="assest/imgs/participants/7.jpg"><span>ФИТиП</span></a></li>
				<li><a href="#partisipant8" data-uk-modal><img src="assest/imgs/participants/8.jpg"><span>ИМБиП</span></a></li>
				<li><a href="#partisipant9" data-uk-modal><img src="assest/imgs/participants/9.jpg"><span>ФИКТ</span></a></li>
				<li><a href="#partisipant10" data-uk-modal><img src="assest/imgs/participants/10.jpg"><span>ИКВО</span></a></li>
				<li><a href="#partisipant11" data-uk-modal><img src="assest/imgs/participants/11.jpg"><span>ЕНФ</span></a></li>
			</ul>
		</div>
	</div>
	<div class="uk-width-8-10">
		<div class="uk-panel">
			<div style="text-align:center;">
				<a href="<?=$url.'auth/';?>">
					<div class="enter ">
						<img src=""><span>Вход</span>
					</div>
				</a>	
			</div>
			<div class="uk-grid">
				<div class="uk-width-8-10 uk-text-center">
					<img class="logo_mister" src=""><!---mister logo in line-->
				</div>
				<div class="uk-width-9-10" style="margin-right:-10%;">
					<div class="uk-panel">
						<div class="about uk-panel">
							<p>"Мистер ИТМО 2016" - больше, чем просто конкурс.<br>4 декабря 2015 года на большой сцене мюзик-холла состоится самое громкое событие уходящего года, жаркое противостояние представителей сильного пола университета ИТМО, "Мистер ИТМО 2016".</p>
							<p>Вот уже почти десятилетие самые талантливые парни ежегодно бьются за право именоваться "студентом номер один" инновационного крупнейшего технического ВУЗа страны. Целый месц представители сильного пола трудятся, не покладая рук, в погоне за победой.</p>
							<p>За годы своего существование мероприятие завоевало любовь всех, кто так или иначе связан с жизнью университета ИТМО. Кроме того, проект "Мистер ИТМО" привлекает внимание не только студентов, но и уважаемых новостных порталов, а также культурной и политической элиты нашего города</p>
							<p>11 человек,<br> но победа будет одержана лишь одним.<br> кто же он?..</p>
						</div>
					</div>
					<div class="uk-panel">
						<div class="uk-grid">
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/9.png">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/10.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/11.png">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/7.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/5.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/17.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/18.png">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/6.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-3">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/20.png">
									</a>
								</div>
							</div>
						
						
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/1.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/2.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/3.png">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/4.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/15.png">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/19.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/13.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/8.png">
									</a>
								</div>
							</div>
							
							
							
							<div class="uk-width-1-4"></div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/21.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4">
								<div class="uk-panel uk-text-center part">
									<a href="">
										<img src="assest/imgs/friends/22.jpg">
									</a>
								</div>
							</div>
							<div class="uk-width-1-4"></div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"><span>Интерактивная поддержка мероприятий © <a href="http://pronwe.ru">ProNWE.ru</a> 2015</span></div>

</body>

<!-- PARTISIPANTS MODAL -->

<div id="partisipant1" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/10.jpg" alt="">
		<img src="assest/imgs/participants/desc/11.jpg" alt="">
	</div>
</div>

<div id="partisipant2" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/20.jpg" alt="">
		<img src="assest/imgs/participants/desc/21.jpg" alt="">
	</div>
</div>

<div id="partisipant3" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt" ></a>
		<img src="assest/imgs/participants/desc/30.jpg" alt="">
		<img src="assest/imgs/participants/desc/31.jpg" alt="">
	</div>
</div>

<div id="partisipant4" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/40.jpg" alt="">
		<img src="assest/imgs/participants/desc/41.jpg" alt="">
	</div>
</div>

<div id="partisipant5" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/50.jpg" alt="">
		<img src="assest/imgs/participants/desc/51.jpg" alt="">
	</div>
</div>

<div id="partisipant6" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/60.jpg" alt="">
		<img src="assest/imgs/participants/desc/61.jpg" alt="">
	</div>
</div>

<div id="partisipant7" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/70.jpg" alt="">
		<img src="assest/imgs/participants/desc/71.jpg" alt="">
	</div>
</div>

<div id="partisipant8" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/80.jpg" alt="">
		<img src="assest/imgs/participants/desc/81.jpg" alt="">
	</div>
</div>

<div id="partisipant9" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/90.jpg" alt="">
		<img src="assest/imgs/participants/desc/91.jpg" alt="">
	</div>
</div>

<div id="partisipant10" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/100.jpg" alt="">
		<img src="assest/imgs/participants/desc/101.jpg" alt="">
	</div>
</div>

<div id="partisipant11" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-lightbox">
		<a href="" style="color:#f00;" class="uk-modal-close uk-close uk-close-alt"></a>
		<img src="assest/imgs/participants/desc/110.jpg" alt="">
		<img src="assest/imgs/participants/desc/111.jpg" alt="">
	</div>
</div>

</html>