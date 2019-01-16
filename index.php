<?php
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '')
	
	?>
<html>
	<head>
		<title>ESSAI PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div align="center">
			<h2>INSCRIPTION</h2>
			<br /><br />
			<form method="POST" action="">
				<table>
					<tr>
						<td>
							<label for="Pseudo">Pseudo :</label>
						</td>
						<td>
							<input type="text" placeholder="Votre Pseudo" id="Pseudo" name="Pseudo" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="
								mail">Mail :
							</label>
						</td>
						<td>
							<input type="
								text" 
								placeholder="
								Votre adresse mail" id
								="mail" name="
								mail" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="
								mail2">confirmation :
							</label>
						</td>
						<td>
							<input type="
								email" 
								placeholder="
								confirmez votre mail" id
								="mail2" name="
								mail2" />
						</td>
					</tr>
					<td>
						<label for="
							mdp">mot de passe :
						</label>
					</td>
					<td>
						<input type="
							password" 
							placeholder="
							votre mot de passe" id
							="mdp" name="
							mdp" />
					</td>
					</tr>
					<td>
						<label for="mdp2">confirmation :</label>
					</td>
					<td>
						<input type=" password" placeholder=" confirmez votre MDP" id ="mdp2" name=" mdp2" />
					</td>
					</tr>
				</table>
				<br />
				<input type="submit" value="je m'inscris" />
			</form>
		</div>
	</body>
</html>