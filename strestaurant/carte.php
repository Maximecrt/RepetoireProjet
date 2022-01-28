<?php
	$con = mysqli_connect ("http://844e899.online-server.cloud/phpMyAdmin/", "maxime","Dilara.", "RestaurantDM");
	mysqli_set_charset($con,"utf8");
	$NOM=$_POST['nomplat'];
	$TYPE=$_POST['typeplat'];
	$PRIX=$_POST['prixplat'];

	$req= "INSERT INTO plat (nomPlat, typePlat, prixPlat) VALUES ('$NOM', '$TYPE', $PRIX)";
	$res = mysqli_query($con, $req);
	mysqli_close($con);

?>
<section class="gaucheCarte"><img src="images/dish.jpg"></section>

	<section class="droiteCarte">
		<div class="colonneCarte">
				<table>
					<tr>

						<th colspan="2">Entrées</th>
					</tr>
						<td class="nomPlat">
<?php
	if(isset($_POST['nomplat']))
	{
	echo $_POST['nomplat'];
	}
?>	

						</td>
						<td class="prixPlat">
<?php
	{
	echo $_POST['prixplat'];
	}
?>				</td>

				</table>
		</div>
		<div class="colonneCarte">

				<table>
					<tr>
						<th colspan="2">Plats</th>
					</tr>
						<td class="nomPlat">
<?php
	if(isset($_POST['nomplat']))
	{
	echo $_POST['nomplat'];
	}
?>	

						</td>
						<td class="prixPlat">
<?php
	{
	echo $_POST['prixplat'];
	}
?>				</td>
                </table>
        </div>
		<div class="colonneCarte">

				<table>
					<tr>
						<th colspan="2">Desserts</th>
					</tr>
<td class="nomPlat">
<?php
	if(isset($_POST['nomplat']))
	{
	echo $_POST['nomplat'];
	}
?>	

						</td>
						<td class="prixPlat">
<?php
	{
	echo $_POST['prixplat'];
	}
?>				</td>

				</table>
		</div>

			</section>


