<h1>Contact Page</h1>
<p><?=$arrData['page']['strMainContent']?></p>

<form id="contactForm" method="post" action="">
	<label>Name:</label>
	<input class="required" type="text" id="name" name="strName" />

	<label>E-mail:</label>
	<input class="required" type="email" id="email" name="strEmail" />

	<label>Phone Number:</label>
	<input type="text" id="phone" name="nPhone" />

	<label>Message:</label>
	<textarea class="required" id="message" name="strMessage"></textarea>

	<input id="btn-contactForm" type="submit" name="submit" value="Send Message" />
</form>