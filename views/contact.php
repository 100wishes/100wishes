<div id="smallHero">
	<div class="smallHero-header">
		<img src="assets/<?=$arrData['page']['strHeroImg']?>"/>
		<h2><?=$arrData['page']['strMainTitle']?></h2>
	</div><!-- //smallHero-header-->
</div><!-- //smallHero-->

<div class="contactContainer">
	<div class="contact">
		<div class="contactForm">
		<form id="contactForm" method="post" action="sendForm.php">
			<label>Full Name</label>
			<input class="required" type="text" id="name" name="strName" />
			
			<label>Email Address</label>
			<input class="required" type="text" id="email" name="strEmail" />

			<label>Telephone</label>	
			<input type="text" id="phone" name="nPhone" />
			
			<label>Message</label>
			<textarea id="message" name="strMessage"></textarea>

			<input id="btn-contactForm" class="completeBtn" type="submit" value="Complete" />
		</form>
		</div><!--contactForm-->	
	</div><!--contact-->

	<div class="contact">
		<div class="contactInfo">
			<h1><?=$arrData['page']['strMainContent']?></h1>
			<p><?=nl2br($arrData['globals']['address'])?></p>
			<p><?=$arrData['globals']['phone']?></p>
		</div><!--contactInfo-->
	</div><!--contact-->
</div><!--contactContainer-->