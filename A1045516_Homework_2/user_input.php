<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP 加密程式 Demo</title>
	</head>
	<body>
		<form method="POST" action="result_output.php">
			<h1>PHP 加密程式 Demo</h1>
			原文&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;
			<input type="text" name="content" size="55"><br><br>
			右移位元數&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;
			<input type="text" name="right_move" size="20">
			&nbsp;( 請輸入介於1到25之間的阿拉伯數字 )<br><br>
			左移位元數&nbsp;&nbsp;<b>:</b>&nbsp;&nbsp;
			<input type="text" name="left_move" size="20">
			&nbsp;( 請輸入介於1到25之間的阿拉伯數字 )<br><br>
			<input type="submit" value="編碼">
			<input type="reset" value="重新輸入">
		</form>
	</body>
</html>