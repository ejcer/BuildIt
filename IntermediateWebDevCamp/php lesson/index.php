<html>

	hello!
	<br/>
	<form action="two.php" method="post">
		Name: <input name="username" type="text"/>
		<button name = "submit" value="yes">Enter</button>
	</form>
	<?php
		$twitchStuff = json_decode(file_get_contents("https://api.twitch.tv/kraken/games/top"));

		for($i = 0; $i < count($twitchStuff->top); $i++){
			echo($i . ". " . $twitchStuff->top[$i]->game->name);
			echo("<img src=\"" . $twitchStuff->top[$i]->game->logo->large . "\"/>");
			echo("</br>");

		}

	?>

</html>