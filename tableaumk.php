

<?php
$container = array(

	1 => array( 
 		'Numero_identifiant' => '1',
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'alu',
),
	
	2 => array( 
 		'Numero_identifiant' => '2',
 		'Poids_max' => '8',
 		'Poids_reel' => '2',
 		'Type_contenu' => 'organique',
),

	3 => array( 
 		'Numero_identifiant' => '3',
 		'Poids_max' => '9',
 		'Poids_reel' => '4',
 		'Type_contenu' => 'metal',
),

	4 => array( 
 		'Numero_identifiant' => '4',
 		'Poids_max' => '3',
 		'Poids_reel' => '2',
 		'Type_contenu' => 'bois',
),
	5 => array( 
 		'Numero_identifiant' => '5',
 		'Poids_max' => '9',
 		'Poids_reel' => '5',
 		'Type_contenu' => 'plastique',
),

	6 => array( 
 		'Numero_identifiant' => '6',
 		'Poids_max' => '7',
 		'Poids_reel' => '2',
 		'Type_contenu' => 'cuivre',
),

);

function Pourcentage($Poids_reel , $Poids_max) {
	return $Poids_reel * 100 / $Poids_max ; 
}

?>


<h1> mehdi kessou eval </h1>
<table>
		<tr>
			<th>Numéro d'identifiant</th>
			<th>Poids maximum</th>
			<th>Poids réel</th>
			<th>Type de contenu</th>
		</tr>
	<?php foreach ($container as $key => $value) { ?>
		<tr>
			<td><?php echo $value["Numero_identifiant"]; ?></td>
			<td><?php echo $value["Poids_max"]; ?></td>
			<td><?php echo $value["Poids_reel"]; ?></td>
			<td><?php echo $value["Type_contenu"]; ?></td>
			<td><?php echo Pourcentage($value["Poids_reel"], $value["Poids_max"]) ?>%</td>

		</tr>	

	<?php } 
	?>

</table>