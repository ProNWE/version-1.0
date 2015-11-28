<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Рейтинг</title> <!-- Кратко -->
	
	<link rel="stylesheet" type="text/css" href="<?=$assets; ?>css/rate.css">
	<script>
	function displayTeamName(str)
	{
		document.getElementById(str).style.display = 'inline';
	}
	function loadPage() {
		var bars = document.getElementsByTagName('DIV');
		var barCounter = 0;
		for(var i=1; i<bars.length; i++)
		{
			var size = bars[i].id.slice(bars[i].id.lastIndexOf('_')+1,bars[i].id.length);
			if (size==0)
				size='2';
			var wat = parseInt(size,10);
			//alert(wat+" "+barCounter);
			
			bars[i].style.width = size+'%';
			if (wat<=50)
			{
				setTimeout(displayTeamName,1000,'my_bname' + barCounter++);
			}
			else
			{
				setTimeout(displayTeamName,1000,'my_wname' + barCounter++);
			}
		}
	}
	</script>
</head>
<body onload="loadPage()">
	<div class="my_title">
		<img src="<?=$uploads.'/'.$logo; ?>"><h1><?=$event; ?></h1>
	</div>
	<ul>
		<li class="my_active"><a href="#">Кратко</a></li>
		<li><a href="#">Команда/Судья</a></li>
		<li><a href="#">Команда/Критерий</a></li>
	</ul>
	<table border="0">
		<!--<tr>
			<td><a href="#">Команда каких-то школьников</a></td>
			<td><div class="my_rating-bar" id="myrbar_0_100"><span class="my_wname" id="my_wname0"> Команда каких-то школьников </span>100%</div><span class="my_bname" id="my_bname0">Команда каких-то школьников</span></td>
		</tr>
		<tr>
			<td><a href="#">Команда других школьников</a></td>
			<td><div class="my_rating-bar" id="myrbar_1_50"><span class="my_wname" id="my_wname1"> Команда других школьников </span>50%</div><span class="my_bname" id="my_bname1">Команда других школьников</span></td>
		</tr>
		<tr>
			<td><a href="#">еще одна команда школьников</a></td>
			<td><div class="my_rating-bar" id="myrbar_2_0"><span class="my_wname" id="my_wname2"> еще одна команда школьников </span>0%</div><span class="my_bname" id="my_bname2">еще одна команда школьников</span></td>
		</tr>
		<tr>
			<td><a href="#">Команда 1</a></td>
			<td><div class="my_rating-bar" id="myrbar_3_10" ><span class="my_wname" id="my_wname3">Команда 1 </span>10%</div><span class="my_bname" id="my_bname3"> Команда 1</span></td>
		</tr>->
		<!-- myrbar_3_10 где 3 - порядковый номер, 10 - процент от максимального количества баллов для изменения размера (в случае нуля, автоматически подставится 2) -->
		<? for($i = 0; $i < count($teams) ; $i++) : ?>
			<tr>
				<td><a href="#"><?=$teams[$i]['name']; ?></a></td>
				<td>
					<div class="my_rating-bar" id="myrbar_0_<?=($i+1)*50; ?>">
						<span class="my_wname" id="my_wname0">s;dlf;sl </span>
						<?=$i*100; ?>
					</div>
					<span class="my_bname" id="my_bname0"><?=$teams[$i]['description']; ?></span>
				</td>
			</tr>
		<? endfor; ?>
	</table>
</body>
</html>
