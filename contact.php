<?php 
	require_once('includes/header.php');
?>
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					Would you like to get in contact with me?

					Fill out this form and I will send you an email back.

					Thanks.
				</div>
				<div class="col-sm">
					<form action="includes/send_mail.php" onsubmit="check_if_capcha_is_filled()" method="POST">
						<table class="contact_form">
							<tr>
								<td>
									<label>Name</label>
									<input type="text" name="name" required>
								</td>
								<td>
									<label>Email</label>
									<input type="email" name="email" required>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<label>Subject</label>
									<input type="text" name="subject" required>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<label>Do you have a question?</label>
									<textarea name="question" required></textarea>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<div class="g-recaptcha" data-callback="capcha_filled" data-expired-callback="capcha_expired" data-sitekey="6LfUCYIUAAAAACiGnFVQ4qsh4NixFmyetTx76tRm"></div>
								</td>
							</tr>
							<tr>
								<td>
									<input type="hidden" name="captcha" id="captcha" value="not_filled" required>
									<input type="submit" name="submit" value="Send">
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
	require_once('includes/footer.php');
?>