<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CSS Zen Garden: The Beauty of CSS Design</title>

	<link rel="stylesheet" media="screen" href="style.css?v=8may2013">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
	<meta name="robots" content="all">


	<!--[if lt IE 9]>
	<script src="script/html5shiv.js"></script>
	<![endif]-->
</head>

<!--



	View source is a feature, not a bug. Thanks for your curiosity and
	interest in participating!

	Here are the submission guidelines for the new and improved csszengarden.com:

	- CSS3? Of course! Prefix for ALL browsers where necessary.
	- go responsive; test your layout at multiple screen sizes.
	- your browser testing baseline: IE9+, recent Chrome/Firefox/Safari, and iOS/Android
	- Graceful degradation is acceptable, and in fact highly encouraged.
	- use classes for styling. Don't use ids.
	- web fonts are cool, just make sure you have a license to share the files. Hosted 
	  services that are applied via the CSS file (ie. Google Fonts) will work fine, but
	  most that require custom HTML won't. TypeKit is supported, see the readme on this
	  page for usage instructions: https://github.com/mezzoblue/csszengarden.com/

	And a few tips on building your CSS file:

	- use :first-child, :last-child and :nth-child to get at non-classed elements
	- use ::before and ::after to create pseudo-elements for extra styling
	- use multiple background images to apply as many as you need to any element
	- use the Kellum Method for image replacement, if still needed. http://goo.gl/GXxdI
	- don't rely on the extra divs at the bottom. Use ::before and ::after instead.

		
-->

<body id="css-zen-garden">
<div class="page-wrapper">

	<section class="intro" id="zen-intro">
		<header role="banner">
			<h1>Abount Me</h1>
		</header>
		<div class="preamble" id="zen-preamble" role="article">
		  <h3>&nbsp;</h3>
		  <p>Name : Thanapech Tunwanarutsakul</p>
		  <p>Nickname : Pech</p>
		  <p>Birthdate : 20/02/1996</p>
		  <p>Age : 21</p>
		  <p>Live : Bangkok Thailand</p>
		  <p>Gender : Male</p>
		  <p>Study : Kasetsart University</p>
		  <p>Faculty : Computer Science</p>
		  <p>Nationality : Thai		  </p>
		  <p>&nbsp;</p>
		</div>
	</section>
	<aside class="sidebar" role="complementary">
		<div class="wrapper">

		  <div class="design-selection" id="design-selection">
				<h3 class="select">Select a Lab:</h3>
				<nav role="navigation">
					<ul>
					<li><a href="lab1/5710450235test.html">Lab_1</a></li>					<li><a href="lab2/labs/index.html">Lab_2
                    </a></li>					
					<li><a href="lab3/webtech/lab3.html">Lab_3</a></li>					<li><a href="lab4/lab4/lab4.html">Lab_4
					</a></li>					<li><a href="lab5/lab5.php">Lab_5
                    </a></li>					
					<li><a href="lab6/lab6/lab6.php">Lab_6-1</a></li>
					<li><a href="lab6/lab6/lab6-2.php">Lab_6-2</a></li>					
					<li><a href="lab7/lab7/lab7.php">Lab_7</a></li>					
					</ul>
				</nav>
			</div>
	  </div>
  </aside>


</div>

<!--

	These superfluous divs/spans were originally provided as catch-alls to add extra imagery.
	These days we have full ::before and ::after support, favour using those instead.
	These only remain for historical design compatibility. They might go away one day.
		
-->
<div class="extra1" role="presentation"></div><div class="extra2" role="presentation"></div><div class="extra3" role="presentation"></div>
<div class="extra4" role="presentation"></div><div class="extra5" role="presentation"></div><div class="extra6" role="presentation"></div>

</body>
</html>