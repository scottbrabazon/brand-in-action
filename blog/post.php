<?php

include('../perch/runtime.php');

$author = perch_blog_author_for_post(perch_get('s'), array(
    'skip-template' => TRUE
), TRUE);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php perch_blog_post_meta(perch_get('s')); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
	<title>Brand in Action | What We Have to Say | <?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?></title>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="../js/menu.js"></script>
</head>

<body>
	
	<div id="menu-holder" class="menu-holder">
			<div class="menu">
				<a href="../"><img alt="Brand In Action" src="../img/bia-white.svg"></a>
				<button class="menu-toggle">
					<div class="hamburger">
					  <div></div>
					  <div></div>
					  <div></div>
					  <div></div>
					</div>
				</button>
				<div class="menu-overlay">
					<ul>
						<li><a href="/#myCarousel-anchor"><h1>Home</h1></a></li>
						<li><a href="/#what-we-do-anchor"><h1>What we do</h1></a></li>
						<li><a href="/#how-we-do-it-anchor"><h1>How We Do It</h1></a></li>
						<li>
							<button class="our-work-toggle">
								<div class='open-close-button'>
									<svg version="1.1" id="_x2014_ÎÓÈ_x5F_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									x="0px" y="0px" width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
										<g class="button-1">
											<path fill="#FFFFFF" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,56.037
											C15.643,56.037,3.962,44.357,3.962,30C3.962,15.643,15.643,3.962,30,3.962c14.357,0,26.037,11.68,26.037,26.038
											C56.037,44.357,44.357,56.037,30,56.037z"/>
										</g>
										<g class="button-2">
											<polygon fill="#FFFFFF" points="32,12.083 28,12.083 28,47.917 32,47.917 "/>
										</g>	
										<g class="button-3">	
											<polygon fill="#FFFFFF" points="12.083,28 12.083,32 47.917,32 47.917,28 "/>
										</g>		
									</svg>
								</div>
							</button><a href="/#our-work-anchor"><h1>Our Work</h1></a>
							<div class="menu-links">
								<ul>
									<li>
										<a href="/dhl/">Making DHL memorable worldwide<br></a>
										<a href="/kuhmo-tae-kwon-do/">Turning England’s medal winners into gold<br></a>
										<a href="/kuhmo-hall-of-fame/">Engaging 100,000 motorsports fans<br></a>
										<a href="/kuhmo-play-safer/">Improving road safety with Kumho Tyre<br></a>
										<a href="/hublot/">Commemorating an EPL win in 24 hours<br></a>
										<a href="/gordons/">Putting the Gordon’s in G&amp;T<br></a>
										<a href="/kuhmo-fireworks/">Half-time celebration for Kumho Tyre<br></a>
									</li>
									<li>		
										<a href="/turkish-airlines/">Captivating fans at international airports<br></a>
										<a href="/casillero/">Delivering the ‘best match-day sponsorship’<br></a>
										<a href="/muml/">Supporting Man Utd global sales teams<br></a>
										<a href="/kuhmo-half-time/">Half-time engagement for 75,000 fans<br></a>
										<a href="/dewars/">Touring the USA with a whiskey pioneer<br></a>
										<a href="/swissquote/">Raising the game for Swissquote</a>
									</li>
								</ul>	
							</div>	
						</li>
						<li><a href="/the-activation-imperative"><h1>The Activation Imperative</h1></a></li>
						<li><a href="/#about-us-anchor"><h1>About Us</h1></a></li>
						<li><a href="/blog"><h1>Blog</h1></a></li>
						<li>
							<button class="contact-us-toggle">
								<div class='open-close-button'>
									<svg version="1.1" id="_x2014_ÎÓÈ_x5F_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
									x="0px" y="0px" width="60px" height="60px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">
										<g class="button-1">
											<path fill="#FFFFFF" d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,56.037
											C15.643,56.037,3.962,44.357,3.962,30C3.962,15.643,15.643,3.962,30,3.962c14.357,0,26.037,11.68,26.037,26.038
											C56.037,44.357,44.357,56.037,30,56.037z"/>
										</g>
										<g class="button-2">
											<polygon fill="#FFFFFF" points="32,12.083 28,12.083 28,47.917 32,47.917 "/>
										</g>	
										<g class="button-3">	
											<polygon fill="#FFFFFF" points="12.083,28 12.083,32 47.917,32 47.917,28 "/>
										</g>		
									</svg>
								</div>
							</button>
							<a href="/#perch-reset"><h1>Contact us</h1></a>
							<div class="contact-us-details">
								<p><a href="tel:+441619268444">Tel: <a href="tel:+441619268444">0161 926 8444</a></a></p>
								<div class="social">
									<a href="https://www.linkedin.com/company/brand-in-action?trk=company_name" target="blank">
										<div class="linkedin" alt="LinkedIn">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
											<g>
											<path fill="#FFFFFF" d="M27.375,21.156v-0.051c-0.01,0.017-0.025,0.034-0.033,0.051H27.375z"/>
											<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
											c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0z M19.347,34.449h-5.168V18.902h5.168V34.449z M16.763,16.78
											h-0.034c-1.733,0-2.857-1.194-2.857-2.687c0-1.525,1.156-2.686,2.925-2.686s2.856,1.161,2.89,2.686
											C19.687,15.586,18.566,16.78,16.763,16.78z M37.986,34.449h-5.17v-8.318c0-2.088-0.746-3.515-2.617-3.515
											c-1.43,0-2.279,0.961-2.652,1.89c-0.137,0.332-0.172,0.795-0.172,1.26v8.684h-5.17c0,0,0.069-14.088,0-15.547h5.17v2.203
											c0.688-1.057,1.912-2.568,4.658-2.568c3.402,0,5.953,2.222,5.953,6.996V34.449z"/>
											</g>
											</svg>
										</div>
									</a>
									<a href="https://twitter.com/brandinaction" target="blank">
										<div class="twitter" alt="Twitter">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
												<g>
													<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
													c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0L24.921,0z M37.338,19.337l0.016,0.792
													c0,8.109-6.179,17.462-17.469,17.462c-3.468,0-6.693-1.016-9.4-2.769c0.47,0.063,0.957,0.095,1.459,0.095
													c2.876,0,5.523-0.987,7.622-2.633c-2.692-0.048-4.943-1.827-5.735-4.263c0.38,0.08,0.762,0.109,1.156,0.109
													c0.562,0,1.11-0.076,1.613-0.213c-2.8-0.566-4.915-3.042-4.915-6.01v-0.079c0.822,0.458,1.765,0.733,2.77,0.763
													c-1.643-1.095-2.723-2.983-2.723-5.099c0-1.126,0.304-2.189,0.836-3.088c3.013,3.712,7.546,6.146,12.644,6.408
													c-0.107-0.443-0.152-0.915-0.152-1.402c0-3.377,2.737-6.131,6.131-6.131c1.765,0,3.363,0.747,4.488,1.932
													c1.385-0.272,2.707-0.774,3.896-1.476c-0.457,1.434-1.431,2.632-2.708,3.393c1.246-0.152,2.436-0.487,3.529-0.974
													C39.573,17.39,38.521,18.469,37.338,19.337L37.338,19.337z"/>
												</g>
											</svg>
										</div>
									</a>
								</div>
							</div>	
						</li>
						<li><a href="/privacy"><h1>Privacy</h1></a></li>
					</ul>
				</div>
			</div>
		</div>
	<!--  change cols2-nav-right to cols2-nav-left if you want the sidebar on the left -->

	<div class="wrapper">

		<div class="blog-post-container">
			<div class="panel-content">
				<div class="primary-content">
				    <div class="post">

				    	<?php perch_blog_post(perch_get('s')); ?>
						
						<!-- Go to www.addthis.com/dashboard to customize your tools -->
						<div class="addthis_sharing_toolbox"><p></p></div>

				    </div>
				</div>
			</div>
			

			<div class="blog-post-author">

				<?php //perch_blog_author_for_post(perch_get('s')); ?>

		    	<?php if (isset($author['author_image']['_default'])): ?>
		            
		                <img alt="<?php echo $author['authorGivenName'].' '.$author['authorFamilyName']; ?>" class="author_image" src="<?php echo $author['author_image']['_default']; ?>" />
		                <?php echo '<h1>' . $author['authorGivenName'].' '.$author['authorFamilyName'] . '</h1>'; ?>
		                <?php echo '<h2>' . $author['authorJobTitle'].' </h2>'; ?>
		                <?php echo '<p>' . $author['author_biog']['raw'] . '</p>'; ?>

		        <?php endif; ?>

		    	<div class="meta">
		            <div class="cats">
		                <?php perch_blog_post_categories(perch_get('s')); ?>
		            </div>
		            <div class="tags">
		                <?php perch_blog_post_tags(perch_get('s')); ?>
		            </div>
		        </div>
		    </div>    
		</div>	

		<a class="anchor-link" id="anchor-mobile"></a>
		<div class="contact-us-mobile-home">
			<div class="panel-content">
				<img alt="Contact Us" src="../img/contact-us-lime-wo.svg">
				<p>We’d love to talk about ideas, events, campaigns or installations that will engage your audiences and deliver value for your sponsorship investments.</p>
				<p><strong>Brand in Action</strong><br>
				The Foundry Communications Ltd<br>
				3 Denmark Street<br>
				Goose Green<br>
				Altrincham<br>
				WA14 2SS</p>
				<div class="contact-form">
					<?php perch_content('Contact Form'); ?>
				</div>
				<h1>Call us:<br><u>0161 926 8444</u></h1>
				<div class="social">
					<a href="https://www.linkedin.com/company/brand-in-action?trk=company_name" target="blank">
						<div class="linkedin" alt="LinkedIn">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
							<g>
							<path fill="#FFFFFF" d="M27.375,21.156v-0.051c-0.01,0.017-0.025,0.034-0.033,0.051H27.375z"/>
							<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
							c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0z M19.347,34.449h-5.168V18.902h5.168V34.449z M16.763,16.78
							h-0.034c-1.733,0-2.857-1.194-2.857-2.687c0-1.525,1.156-2.686,2.925-2.686s2.856,1.161,2.89,2.686
							C19.687,15.586,18.566,16.78,16.763,16.78z M37.986,34.449h-5.17v-8.318c0-2.088-0.746-3.515-2.617-3.515
							c-1.43,0-2.279,0.961-2.652,1.89c-0.137,0.332-0.172,0.795-0.172,1.26v8.684h-5.17c0,0,0.069-14.088,0-15.547h5.17v2.203
							c0.688-1.057,1.912-2.568,4.658-2.568c3.402,0,5.953,2.222,5.953,6.996V34.449z"/>
							</g>
							</svg>
						</div>
					</a>
					<a href="https://twitter.com/brandinaction" target="blank">
						<div class="twitter" alt="Twitter">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
									c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0L24.921,0z M37.338,19.337l0.016,0.792
									c0,8.109-6.179,17.462-17.469,17.462c-3.468,0-6.693-1.016-9.4-2.769c0.47,0.063,0.957,0.095,1.459,0.095
									c2.876,0,5.523-0.987,7.622-2.633c-2.692-0.048-4.943-1.827-5.735-4.263c0.38,0.08,0.762,0.109,1.156,0.109
									c0.562,0,1.11-0.076,1.613-0.213c-2.8-0.566-4.915-3.042-4.915-6.01v-0.079c0.822,0.458,1.765,0.733,2.77,0.763
									c-1.643-1.095-2.723-2.983-2.723-5.099c0-1.126,0.304-2.189,0.836-3.088c3.013,3.712,7.546,6.146,12.644,6.408
									c-0.107-0.443-0.152-0.915-0.152-1.402c0-3.377,2.737-6.131,6.131-6.131c1.765,0,3.363,0.747,4.488,1.932
									c1.385-0.272,2.707-0.774,3.896-1.476c-0.457,1.434-1.431,2.632-2.708,3.393c1.246-0.152,2.436-0.487,3.529-0.974
									C39.573,17.39,38.521,18.469,37.338,19.337L37.338,19.337z"/>
								</g>
							</svg>
						</div>
					</a>
				</div>
			</div>	
		</div>
		<div class="contact-us" id="contact">
			<a class="anchor-link" id="anchor-desktop"></a>
			<a class="anchor-link" id="perch-reset"></a>
			<div class="panel-content">
				<img alt="Contact Us" src="../img/contact-us-lime.svg">
				<p>We’d love to talk about ideas, events, campaigns or installations that will engage your audiences and deliver value for your sponsorship investments.</p>
				<p><strong>Brand in Action</strong><br>
				The Foundry Communications Ltd<br>
				3 Denmark Street<br>
				Goose Green<br>
				Altrincham<br>
				WA14 2SS<br>&nbsp;</p>
				<h1>Call us:<br>
				<u>0161 926 8444</u></h1>
			</div>	
		</div>

		<div class="contact-us-form-desktop">
			<div class="panel-content">
				<div class="contact-form">
					<?php perch_content('Contact Form'); ?>
				</div>
				<div class="social">
					<a href="https://www.linkedin.com/company/brand-in-action?trk=company_name" target="blank">
						<div class="linkedin" alt="LinkedIn">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
							<g>
							<path fill="#FFFFFF" d="M27.375,21.156v-0.051c-0.01,0.017-0.025,0.034-0.033,0.051H27.375z"/>
							<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
							c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0z M19.347,34.449h-5.168V18.902h5.168V34.449z M16.763,16.78
							h-0.034c-1.733,0-2.857-1.194-2.857-2.687c0-1.525,1.156-2.686,2.925-2.686s2.856,1.161,2.89,2.686
							C19.687,15.586,18.566,16.78,16.763,16.78z M37.986,34.449h-5.17v-8.318c0-2.088-0.746-3.515-2.617-3.515
							c-1.43,0-2.279,0.961-2.652,1.89c-0.137,0.332-0.172,0.795-0.172,1.26v8.684h-5.17c0,0,0.069-14.088,0-15.547h5.17v2.203
							c0.688-1.057,1.912-2.568,4.658-2.568c3.402,0,5.953,2.222,5.953,6.996V34.449z"/>
							</g>
							</svg>
						</div>
					</a>
					<a href="https://twitter.com/brandinaction" target="blank">
						<div class="twitter" alt="Twitter">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M24.921,0C11.167,0,0,11.166,0,24.921c0,13.771,11.167,24.937,24.921,24.937
									c13.771,0,24.937-11.166,24.937-24.937C49.857,11.15,38.689,0,24.921,0L24.921,0z M37.338,19.337l0.016,0.792
									c0,8.109-6.179,17.462-17.469,17.462c-3.468,0-6.693-1.016-9.4-2.769c0.47,0.063,0.957,0.095,1.459,0.095
									c2.876,0,5.523-0.987,7.622-2.633c-2.692-0.048-4.943-1.827-5.735-4.263c0.38,0.08,0.762,0.109,1.156,0.109
									c0.562,0,1.11-0.076,1.613-0.213c-2.8-0.566-4.915-3.042-4.915-6.01v-0.079c0.822,0.458,1.765,0.733,2.77,0.763
									c-1.643-1.095-2.723-2.983-2.723-5.099c0-1.126,0.304-2.189,0.836-3.088c3.013,3.712,7.546,6.146,12.644,6.408
									c-0.107-0.443-0.152-0.915-0.152-1.402c0-3.377,2.737-6.131,6.131-6.131c1.765,0,3.363,0.747,4.488,1.932
									c1.385-0.272,2.707-0.774,3.896-1.476c-0.457,1.434-1.431,2.632-2.708,3.393c1.246-0.152,2.436-0.487,3.529-0.974
									C39.573,17.39,38.521,18.469,37.338,19.337L37.338,19.337z"/>
								</g>
							</svg>
						</div>
					</a>
				</div>
			</div>	
		</div>
	</div>
	
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57308b2c9d4d491b"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-367141-14', 'auto');
	  ga('send', 'pageview');
	</script>
	<script type="text/javascript" src="https://e2eg.co.uk/2498.js"></script>
</body>
</html>