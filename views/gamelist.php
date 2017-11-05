<h1>Gamelist</h1>
<?php
foreach ($game_list as $game)
{
	// account for single quote
	$encoded_fields = str_replace("'", "&#39", json_encode($game['fields']));
	$fields = isset($game['fields']) ? "data-fields='{$encoded_fields}'" : '';
	?>
		<div class='btn btn-block btn-game' <?php echo $fields; ?>>
			<?php echo $game['name']; ?>
		</div>
	<?php
}
?>
