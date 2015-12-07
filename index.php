<?php require 'database.php';
//getting data from DB
$res = $con->query("SELECT * FROM `shouts` ORDER BY id DESC");
 ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shout it</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="container">
		<header>
			<h1>Message It !!!!</h1>
		</header>

		<div id="shouts">
			<ul>
			<?php while($row = $res->fetch_assoc()): ?>
					<li class='shout'>
						<span>
							<?php echo $row["time"]; ?> :
						</span>
						<strong><?php echo$row["user"]; ?></strong>
						-> <?php echo$row["message"]; ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>

		<div id="input">

		<?php if(isset($_GET['error'])) :?>
			<div class="error"><span><?php echo $_GET['error']; ?></span></div>
		<?php endif;?>
			<form method="post" action="process.php">
				<div class="input-content" >
					<input type="text" name="user" placeholder="Enter your name">
					<input type="text" name="message" placeholder="Enter your message">
				</div>
				<br>
				<input type="submit" value="shout message" class="shout-btn" name="submit">
			</form>
		</div>
	</section>
</body>
</html>