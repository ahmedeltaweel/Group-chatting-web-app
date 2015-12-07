<!doctype html>
<html>
<head>
	<title>Shout it</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="container">
		<header>
			<h1>Shout It !!!!</h1>
		</header>

		<article id="shouts">
			<ul>
				<li class="shout">
					<span>10:00PM -</span> Ahmed: How Are You ?
				</li>
				<li class="shout">
					<span>10:00PM -</span> Ahmed: How Are You ?
				</li>
				<li class="shout">
					<span>10:00PM -</span> Ahmed: How Are You ?
				</li>
				<li class="shout">
					<span>10:00PM -</span> Ahmed: How Are You ?
				</li>
			</ul>
		</article>

		<article id="input">
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Enter your message">
				<br>
				<input type="submit" value="shout message" placeholder="Enter your name" class="shout-btn">
			</form>
		</article>
	</section>
</body>
</html>