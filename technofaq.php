<?php
session_start();
if(isset($_SESSION['user_name'])){
  echo "Hello ,  " .$_SESSION['user_name'];
    echo ' <form align="right" action="technologout.php"><input type="submit" value="Logout" ></form>';
  
}

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<link rel="stylesheet" href="technofaq.css">
	<title>FAQ's</title>
</head>

<body>
	<header class="cd-header flex flex-column flex-center">
		<div class="text-component text-center">
			<h1><strong>FAQ Template</strong></h1>

		</div>
	</header>

	<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
		<ul class="cd-faq__categories">
			<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Basics</a></li>
			<li><a class="cd-faq__category truncate" href="#mobile">Mobile</a></li>
			<li><a class="cd-faq__category truncate" href="#account">Account</a></li>
			<li><a class="cd-faq__category truncate" href="#payments">Payments</a></li>
			<li><a class="cd-faq__category truncate" href="#privacy">Privacy</a></li>
		</ul> 

		<div class="cd-faq__items">
			<ul id="basics" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Basics</h2>
				</li>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I change my password?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Change your password
								Open your technocolabs Account. You might need to sign in.
								<br> "Security," select Signing in to technocolabs.
								Choose Password. You might need to sign in again.<br>
								Enter your new password, then select Change Password..</p>
						</div>
					</div>
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I sign up?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>To create a new account, click on the "register" on www.technocolabs.com and
								follow the instructions to create your Technocolabs profile and start learning.

								If you already have a TECHNOCOLABS account, you can click the "I Already Have an Account"
								button on www.technocolabs.com to enter your email/username and password. In case you don't
								remember your password, simply click on "Forgot password" and provide your email
								address. </p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Can I remove a post?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>YES, whenever feels like remove your comments can be removed.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do reviews work?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>The remaining reviews are then posted on a page. When more than one review has been posted, the sites average the star ratings to give a business or product an overall rating. Reviews generally appear in date order, but can be searched by star rating and are sometimes re-ordered at the discretion of the site.</p>
						</div>
					</div> 
				</li>
			</ul> 

			<ul id="mobile" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Mobile</h2>
				</li>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How does syncing work?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Sync events will often complete while the user has a page open to the site, so requiring user permission would be a poor experience. Instead, we're limiting when syncs can be registered and triggered to prevent abuse.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I Download files from my phone or tablet?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>You can find your downloads on your Android device in your My Files app (called File Manager on some phones), which you can find in the device's App Drawer. Unlike iPhone, app downloads are not stored on the home screen of your Android device, and can be found with an upward swipe on the home screen.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I link to a file or folder?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Browse until you find the specific file, folder, or library for which you want the direct link. Hold down Shift on your keyboard and right-click on the file, folder, or library for which you want a link. Then, select "Copy as path" in the contextual menu.</p>
						</div>
					</div> 
				</li>
			</ul> 

			<ul id="account" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Account</h2>
				</li>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I change my password?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Open your Google Account. You might need to sign in.
                                Under "Security," select Signing in to Google.
                                Choose Password. You might need to sign in again.
                                Enter your new password, then select Change Password.
                                </p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I delete my account?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Log in to your account and then go to “Manage” from the drop-down menu under your user name. Then click on “Manage Account” and then “Delete Account”. It will then ask you why you want to delete your account. Fill that in and then click the “Delete Account” button.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How do I change my account settings?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>On your computer, go to Gmail.
                                In the top right, click Settings. See all settings.
                                At the top, choose a settings page, such as General, Labels, or Inbox.
                                Make your changes.
                                After you're done with each page, click Save Changes at the bottom.
                                </p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>I forgot my password. How do I reset it?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Visit Forgot Password.
                                Enter either the email address or username on the account.
                                Select Submit.
                                Check your inbox for a password reset email.
                                Click on the URL provided in the email and enter a new password.</p>
						</div>
					</div> 
				</li>
			</ul>

			<ul id="payments" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Payments</h2>
				</li>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Can I have an invoice for my subscription?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>no,we dont allow it...
                            </p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Why did my credit card or PayPal payment fail?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>You entered your credit card information and PayPal informed you that your credit card has been declined. Several reasons can explain this issue: Your card has expired or out of date. You need to confirm your card.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Why does my bank statement show multiple charges for one upgrade?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Authorizations are the result of normal bank processing and are automatically resolved by your bank. A little background: when a payment is processed, a bank authorization is posted to a bank account statement while the charge is pending.</p>
						</div>
					</div> 
				</li>
			</ul> 

			<ul id="privacy" class="cd-faq__group">
				<li class="cd-faq__title">
					<h2>Privacy</h2>
				</li>
				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>Can I specify my own private key?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Private keys are never shared between users. Rather than creating a cloud-specific or RightScale-specific key pair, users can continue to use their preexisting, personal key pair.</p>
						</div>
					</div>
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>My files are missing! How do I get them back?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Launch EaseUS hard drive recovery software. Run EaseUS Data Recovery Wizard on your PC and select the drive on your hard disk where you lost or deleted files. ...
                                Check and preview all lost hard drive data. ...
                                Restore lost hard drive data to a safe location.</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How can I access my account data?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>Go to your Google Account.
                                On the left navigation panel, click Data & personalization.
                                Scroll to the Things you can create and do panel.
                                Click Go to Google Dashboard.
                                You'll see Google services you use and a summary of your data..
							</p>
						</div>
					</div> 
				</li>

				<li class="cd-faq__item">
					<a class="cd-faq__trigger" href="#0"><span>How can I control if other search engines can link to my profile?</span></a>
					<div class="cd-faq__content">
						<div class="text-component">
							<p>That would be make sure by our teams no privacy source woulb be leaked or misused</p>
						</div>
					</div>
				</li>
			</ul> 
            <a href="#0" class="cd-faq__close-panel text-replace">Close</a>

			<div class="cd-faq__overlay" aria-hidden="true"></div>
	</section> 
	<script src="./technofaqmain.js"></script> 
	<script src="./technofaqutil.js"></script>
</body>

</html>