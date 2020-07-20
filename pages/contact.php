<?php include "../lang/fr.php";?>
<?php $section = "contact";?>


	<?php include "../includes/header.php" ?>
		




	<div role="main" class="main">

<!-- Google Maps .-->
<div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div>

<div class="container">

	<div class="row py-4">
		<div class="col-lg-6">

			<div class="overflow-hidden mb-1">
				<h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"><strong class="font-weight-extra-bold">contactez</strong>-nous</h2>
			</div>
			<div class="overflow-hidden mb-4 pb-3">
				<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">N'hésitez pas à demander des détails, n'enregistrez aucune question!</p>
			</div>

			<form class="contact-form" action="php/contact-form.php" method="POST">
				<div class="contact-form-success alert alert-success d-none mt-4">
					<strong>Succès! !</strong>  Votre message nous a été envoyé.
				</div>
			
				<div class="contact-form-error alert alert-danger d-none mt-4">
					<strong>Erreur!</strong> Une erreur est survenue lors de l'envoi de votre message.
					<span class="mail-error-message text-1 d-block"></span>
				</div>
				
				<div class="form-row">
					<div class="form-group col-lg-6">
						<label class="required font-weight-bold text-dark text-2">Nom</label>
						<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
					</div>
					<div class="form-group col-lg-6">
						<label class="required font-weight-bold text-dark text-2">Address E-mail</label>
						<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label class="font-weight-bold text-dark text-2">Sujet</label>
						<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label class="required font-weight-bold text-dark text-2">Message</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col">
						<input type="submit" value="Envoyer" class="btn btn-primary btn-modern" data-loading-text="Loading...">
					</div>
				</div>
			</form>

		</div>
		<div class="col-lg-6">

			<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
				<h4 class="mt-2 mb-1">Notre <strong>Bureau</strong></h4>
				<ul class="list list-icons list-icons-style-2 mt-2">
					<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> <?Php echo $Address ?></li>
					<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone: </strong><a href= "tel:<?php echo $phone ?>"><?php echo $phone ?></a></li>
					<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email: </strong> <a href="mailto:<?php $email?>"><?php echo $email?></a></li>
				</ul>
			</div>

			<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
				<h4 class="pt-5">Horaires <strong> d'ouverture</strong></h4>
				<ul class="list list-icons list-dark mt-2">
					<li><i class="far fa-clock top-6"></i> Lundi - vendredi - 9h à 17h</li>
					<li><i class="far fa-clock top-6"></i> Samedi - 9h à 14h</li>
					<li><i class="far fa-clock top-6"></i> Dimanche - fermé</li>
				</ul>
			</div>

			<!-- <h4 class="pt-5">Get in <strong>Touch</strong></h4> -->
			<p class="lead pt-5 mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

		</div>

	</div>

</div>

</div>




	
	<?php include "../includes/footer.php" ?>

