<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TITLE</title>
</head>
<body>

<form action="<?=URL::site('auth/auth'); ?>" method="post">
	<input type="text" name="login" placeholder="email или login">
	<input type="text" name="password" placeholder="password">
	<input type="submit" name="submit" value="Enter">
</form>
	
</body>
</html>