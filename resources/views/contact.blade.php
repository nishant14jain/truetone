@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content contactPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>Get in touch with us</h1>
		</div>
	</section>
	<section class='contact-form'>
		<div class='container'>			
			<form id="contact-form" method="post" action="contact.php" role="form">
				<h3>Please fill out the form start a conversation with us.<br> We are looking forward to hearing from you!
					<br><small>(You can also email us directly at: <a href=''>info@truetoneinc.com</a>)</small>
				</h3>
				<div class="messages"></div>
				<div class="controls">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_name">Firstname *</label>
								<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_lastname">Lastname *</label>
								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_name">Company Name</label>
								<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your company name">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_lastname">Designation</label>
								<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your designation">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_email">Email *</label>
								<input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_phone">Phone</label>
								<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_name">Country</label>
								<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your country name *">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="form_name">I want to know more about*:</label>
								<select id='interestedIn' class='form-control' required="required" data-error="Please choose one option">
									<option value=''>Select option</option>
									<option value=''>Dyes</option>
									<option value=''>Yarns</option>
									<option value=''>Fabrics</option>
									<option value=''>DIY Kits</option>
									<option value=''>TrueTone Certification</option>
									<option value=''>Becoming a channel partner with TrueTone</option>
									<option value=''>Other</option>
								</select>								
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="form_message">Message *</label>
								<textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-success btn-send" value="Send message">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="text-muted"><strong>*</strong> These fields are required.</p>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>


@endsection
