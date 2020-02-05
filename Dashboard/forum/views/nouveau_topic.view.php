<!DOCTYPE html>
<html>
<head>
	<title>forum</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<form class="fntopic" method="POST">
		<div class="container">
    		<table cellpadding="0" cellspacing="0" border="2" class="table table-striped table-bordered" id="example">
        
        <thead>
		<tr class="header">
			<th style="text-align:center;" class="main">Nouveau topic</th>
		</tr>
		</thead>
        <tbody>
		<tr>
			<td style="text-align:center;">Sujet</td>
			<td><input style="height: 40px;width: 77%" type="text" size="70" maxlength="70" name="tsujet"/></td>
		</tr>
		<tr>
			<td style="text-align:center;">Catégories</td>
			<td>
				<?=$categorie ?>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">Sous-Catégorie</td>
			<td>
				<select name="souscategorie" style="width: 77.5%;height: 40px">
					<?php while($sc = $souscategories->fetch()) { ?>
					<option value="<?= $sc['id']?>"><?= $sc['nom']?></option>
					<?php } ?>
				
				</select>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">Message</td>
			<td><textarea style="width: 76.5%" name="tcontenu"></textarea></td>
		</tr>
		<tr>
			<td style="text-align:center;">Me notifier des réponses par mail</td>
			<td ><input type="checkbox" name="tmail" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="tsubmit" value="Poster le topic"></td>
		</tr>
		<?php if (isset($terror)) {?>
		<tr>
			<td style="text-align:center;" colspan="2"><?= $terror?></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
	</form>
</body>
</html>