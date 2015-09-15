<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REgister</title>
</head>
<body>
	<form action="<?=URL::site('registration/add'); ?>" method="post">
		<input type="text" name="org_name" placeholder="Название организации"><br>
		<input type="text" name="lastname" placeholder="Фамилия инициатора"><br>
		<input type="text" name="name" placeholder="Имя"><br>
		<input type="text" name="surname" placeholder="Отчество"><br>
		<input type="text" name="address" placeholder="Адрес"><br>
		<input type="text" name="city" placeholder="Город"><br>
		<input type="text" name="login" placeholder="Логин"><br>
		<input type="text" name="password" placeholder="password"><br>
		<input type="text" name="phone" placeholder="phone"><br>
		<input type="text" name="email" placeholder="email"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>