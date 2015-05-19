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
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'organique',
),

	3 => array( 
 		'Numero_identifiant' => '3',
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'metal',
),

	4 => array( 
 		'Numero_identifiant' => '4',
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'bois',
),
	5 => array( 
 		'Numero_identifiant' => '5',
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'plastique',
),

	6 => array( 
 		'Numero_identifiant' => '6',
 		'Poids_max' => '6',
 		'Poids_reel' => '1',
 		'Type_contenu' => 'cuivre',
),

);


?>



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
		</tr>	

	<?php } 
	?>

</table>