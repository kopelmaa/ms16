<?php
//var_dump($_GET);
print_r($_GET);
echo("</br>");
//var_dump($_POST);
print_r($_POST);
echo("</br>");

//echo $_GET["nimi"]."<br>";


?>


<!DOCTYPE html>
	<html>
	<head></head>
		<body>
		<h2>GET meetod</h2>
			<form action="" method="get">
				<ul>
						<li>
							<label for="nimi">Nimi</label>
							<input type="text" name="nimi">
						</li>
						<li>
							<label for="perenimi">Perekonnanimi</label>
							<input type="text" name="perenimi">
						</li>
						<li>
							<input type="submit" name="sisesta" value="sisesta">
						</li>
				</ul>
                
                <?php if (isset($_GET['nimi']))
                {foreach ($_GET as $key => $value)
                {echo $key."on".$value. "<br>";}
                }
                else {echo "midagi ei ole veel sisestatud <br>";} ?>
                
                
			</form>
			<h2>POST meetod</h2>
			<form action="" method="post">
				<ul>
						<li>
							<label for="nimi">Nimi</label>
							<input type="text" name="nimi">
						</li>
						<li>
							<label for="perenimi">Perekonnanimi</label>
							<input type="text" name="perenimi">
						</li>
						<li>
							<input type="submit" name="sisesta" value="sisesta">
						</li>
				</ul>
               <?php if (isset($_POST['nimi']))
                {foreach ($_POST as $key => $value)
                {echo $key."on".$value. "<br>";}
                }
                else {echo "midagi ei ole veel sisestatud <br>";} ?>
			</form>
            
            
		</body>
	

</html>

