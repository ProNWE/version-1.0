<html>
<head>
<title>Мероприятие - ... - Жюри Иван Иванович</title>
<link rel="stylesheet" type="text/css" href="<?=$assets;?>css/judge.css">

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
</head>
<body>

<div class="main">
	<div class="logo">
		<img src="<?=$assets;?>imgs/logo.png" class="logo"> <!--- лого мероприятия -->
		
		<div class="profile">
			<span>Добро пожаловать, Иван Иванович</span>
			<br>
			<a href="#">Настройки</a>
			<a href="#">Выход</a>
		</div>
	</div>
	<div class="content">
		<div class="teams">
			<center><span>Команды</span></center>
			<ul>
				<li><a href="#">Факультет информационных технологий и программирования</a></li>
				<li><a href="#">ФЛИСИ</a></li>
				<li class="active"><a href="#">ФИКТ</a></li>
			</ul>
		</div>
		<div class="rating">
			<img src="<?=$assets;?>imgs/logo.png" class="logo tlogo">  <!--team logo -->
			<div class="tdescription">
				Для центрирования div только по горизонтали, необходимо указать ширину и автоматическое значение для левого и правого margins (это сокращенная форма написания CSS-свойств). Этот метод работает на блочных элементов (div, p, h1 и т. п.). Чтобы применить его для линейных элементов (например, гиперссылок и изображений), необходимо написать еще одно правило — display:block.
			</div>
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
	</div>
<div>
</body>
</html>
