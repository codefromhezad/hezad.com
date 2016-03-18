<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This is the website of Hezad / Pierrick Varin. A co-founder of Glitch, a creative studio located in Paris and a humble musician and tinkerer.">

	<meta property="og:url" content="http://hezad.com" />
	<meta property="og:description" content="This is the website of Pierrick Varin" />
	<meta property="og:title" content="hezad.com" />
	<meta property="og:site_name" content="Hezad's website" />
	<meta property="og:image" content="http://hezad.com/img/preview.jpg" />
	<meta property="fb:admins" content="100000641265022" />

	<title>Hezad's website</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
	<link href='mobile.css' rel='stylesheet' type='text/css'>

	<script src="jquery.js"></script>

	<?php include('data.php'); ?>
</head>
<body>
	<header>
		<div id="canvas-wrapper">
			<div id="canvas-container">
				<canvas id="canvas1" width="300" height="300"></canvas>
			</div>
		</div>
		<div id="header-infos">
			<div id="infos-container">
				<h2>Hello world</h2>

				<p>
					My name is Pierrick Varin.<br />
					I am a co-founder of <a href="http://glitchstudio.com" target="_blank">Glitch</a>, a creative studio located in <a href="https://goo.gl/maps/S3Yke" target="_blank">Paris</a>.
				</p>

				<p>
					I'm also a humble <a href="https://soundcloud.com/hezad" target="_blank">musician</a> when I'm not tinkering with electronics or coding stuff that will never leave my <span class="pre">/var/www/lab</span> folder.
				</p>

				<p>
					Sometimes, I do push stuff on <a href="https://github.com/hezad" target="_blank">github</a> though.
				</p>

				<p>
					Anyway, this is my website.
				</p>
			</div>
		</div>
	</header>
	
	<section class="section songs">
		<h2><span>Some songs from now and then</span></h2>

		<div class="song">
			<div class="inner-song">
				<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/152721942&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		</div>

		<div class="song">
			<div class="inner-song">
				<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/152721216&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		</div>

		<div class="song">
			<div class="inner-song">
				<iframe width="100%" height="300" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/18900768&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
			</div>
		</div>

		<div class="more">
			<a href="https://soundcloud.com/hezad" target="_blank" class="cta-button soundcloud">More songs</a>
		</div>
	</section>

	<section class="section photos">
		<h2><span>Some photos from here and there</span></h2>

		<?php foreach($data['photos'] as $item): ?>
			<div class="photo">
				<div class="inner-photo">
					<a target="_blank" href="<?php echo $item['url']; ?>">
						<img src="<?php echo $item['image']; ?>" width="100%" height="100%">
					</a>
				</div>
			</div>
		<?php endforeach; ?>

		<div class="more">
			<a href="https://instagram.com/hezad" target="_blank" class="cta-button instagram">More photos</a>
		</div>
	</section>

	<section class="section lab">
		<h2><span>Experiments and other stuff</span></h2>

		<?php foreach($data['lab'] as $item_name => $item): ?>
			<div class="lab-item">
				<div class="inner-lab-item">
					<a target="_blank" href="<?php echo $item['url']; ?>">
						<img src="<?php echo $item['image']; ?>">
						<span class="lab-item-title">
							<?php echo $item_name; ?>
						</span>
						<span class="lab-item-desc">
							<?php echo $item['desc']; ?> 
						</span>
					</a>
				</div>
			</div>
		<?php endforeach; ?>

	</section>

	<footer class="section empty-footer">
		<h2><span>The end</span></h2>

		<p>
			You reached the last section of my website. <br>
			Thanks for passing by. <br>
			<br>
			Have a nice day !
		</p>
	</footer>

	<script src="main.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-6167427-3', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
