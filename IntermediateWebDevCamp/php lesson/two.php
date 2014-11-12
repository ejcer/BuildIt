<html>
 your name is:
 	<?php
 		session_start();
 		if(isset($_POST["username"])){
 		$_SESSION["user"] = $_POST["username"];
 		}
 		echo("your name is: " . $_POST["username"]);


 		$twitchStuff = json_decode(file_get_contents("https://api.twitch.tv/kraken/games/top"));

		for($i = 0; $i < count($twitchStuff->top); $i++){
			echo($i . ". " . $twitchStuff->top[$i]->game->name);
			echo("<img src=\"" . $twitchStuff->top[$i]->game->logo->large . "\"/>");
			echo("</br>");

		}
 	?>
</html>