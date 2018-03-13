<?php
$score=$_GET["score"];
$scorex=explode(":", $score);
$highscore = $scorex[0];
?>
<html>
<head>
	<title>GAME CHAO</title>
	<meta property="og:title" content="Game CHAO !"/>
	<meta property="og:image" content="http://dickysuryo.me/logo.png"/>
	<meta property="og:site_name" content="Game CHAO !"/>
	<meta property="og:description" content="<?php echo $highscore;?> score saya di GAME CHAO"/>
</head>
<body>
	<meta http-equiv="refresh" content="0"; URL="http://dickysuryo.me/"/>
</body>
</html>
