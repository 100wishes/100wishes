<h1>Home Page</h1>
<!-- <p><?=$arrData['page']['strMainContent']?></p> -->

<section id="home">
	<div class="homeHero">
		<div class="heroTextContainer">
			<h2><?=$arrData['page']['strMainTitle']?></h2>
			<p class="heroText"><?=$arrData['page']['strMainContent']?></p>

			<a href="index.php?controler=pages&amp;action=hospitals">Start Your Mission</a>
		</div><!--heroTextContainer-->
	</div><!--homeHero-->

	<p class="introHeading">"Every child is special."</p>

	<div id="homeIntro">
		<div class="intro">
			<div class="introBg">
				<p>Bringing joy to children is our top priority. Our aim is to increase awareness so that hospitals seeking generosity can be connected with philanthropists.</p>
				<a href="index.php?controler=pages&amp;action=about" class=" homeIntroBtn">Learn more</a>
			</div><!--introBg-->
		</div><!--intro-->

		<div class="intro">
			<img src="images/homeGrid1.png" alt="homeGrid">
		</div><!--intro-->

		<div class="intro">
			<img src="images/homeGrid2.png" alt="homeGrid">
		</div><!--intro-->

		<div class="intro">
			<img src="images/homeGrid3.png" alt="homeGrid">
		</div><!--intro-->
	</div><!--homeIntro-->
</section><!--home-->