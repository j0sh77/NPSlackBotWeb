
<?php include "header.php"; ?>
<?php require_once(BASE_PATH . "utils.php"); ?>

<?php
	if (isset($_SESSION['username']))
	{
		extract(init());
		?>

		<div id="home" class="view">
			<div id="gamelist">
				<?php include 'views/gamelist.php'; ?>
			</div>
			<div class="btn btn-red btn-logout">Logout</div>
		</div>

		<div id="gamesettings" class="view">
			<?php include 'views/gamesettings.php'; ?>
		</div>

		<?php
	}
	else
	{
		include 'views/login.php';
	}
?>

<?php include "footer.php" ?>
