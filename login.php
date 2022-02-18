<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>保活メイト | ログイン</title>
	<link rel="stylesheet" type="text/css" href="login.css" media="all">
</head>
<body>

	<div id="wrapper">

		<header>
			<h1>保活メイトへようこそ</h1>
			<h2>保活はこれ一つで安心！ <br>
				ママになったら保活メイト！</h2>
		</header>

		<div>

			<section>
				 <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
				<!-- ここにフォームを記述 -->
				<form name="form1" action="login_act.php" method="post">
					<label for="user_id">ユーザーID：</label>
					<input type="text" id="user_id" name="lid">

					<label for="password">パスワード：</label>
					<input type="password" id="password" name="lpw">

					<input type="checkbox" for="save" name="save" value="save">
					<label id="save">保存する</label>

					<button type="submit">ログイン</button>
				</form>
			</section>

		</div>

		<footer>
			<p>&copy; 保活メイト</p>
		</footer>

	</div><!-- //#wrapper -->

</body>
</html>

   <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
   <!-- <form name="form1" action="login_act.php" method="post">
	ID:<input type="text" name="lid" />
	PW:<input type="password" name="lpw" />
	<input type="submit" value="LOGIN" />
</form> -->
