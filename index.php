<?php require 'database.php';
$res = $con->query("SELECT * FROM `shouts`");
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
			<h1>Shout It !!!!</h1>
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
			<form method="post" action="process.php">
				<div class="input-content" >
					<input type="text" name="user" placeholder="Enter your name">
					<input type="text" name="message" placeholder="Enter your message">
				</div>
				<br>
				<input type="submit" value="shout message" class="shout-btn">
			</form>
		</div>
	</section>
</body>
</html>