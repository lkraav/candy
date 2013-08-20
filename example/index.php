<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Candy - Chats are not dead yet</title>
	<link rel="shortcut icon" href="../res/img/favicon.png" type="image/gif" />
	<link rel="stylesheet" type="text/css" href="../res/default.css" />
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script type="text/javascript" src="../libs/libs.min.js"></script>
	<script type="text/javascript" src="../candy.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			Candy.init('http-bind/', {
				core: { debug: false },
				view: { resources: '../res/' }
			});
			
			Candy.Core.connect();
		});
	</script>
</head>
<body>
	<form method="post" id="login-form" class="login-form">
		{{#displayUsername}}<label for="username">{{_labelUsername}}</label><input type="text" id="username" name="username" value="<?php echo $_SERVER[ "PHP_AUTH_USER" ]; ?>@domain.com"/>{{/displayUsername}}
		{{#presetJid}}<input type="hidden" id="username" name="username" value="{{presetJid}}"/>{{/presetJid}}
		{{#displayPassword}}<label for="password">{{_labelPassword}}</label><input type="password" id="password" name="password" value="<?php echo $_SERVER[ "PHP_AUTH_PW" ]; ?>"/>{{/displayPassword}}
		<input type="submit" class="button" value="{{_loginSubmit}}" />
	</form>
	<div id="candy"></div>
</body>
</html>
