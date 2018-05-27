<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="faq/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="faq/css/style.css"> <!-- Resource style -->
	<script src="faq/js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ hireITS</title>

	<style>
		.header-container{
			position : relative;
			height : 327px;
			margin-bottom : 50px;
		}

		.faq{
			position : absolute;
			top : 100px;
			left : 370px;
			text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
            font-weight : bold;
		}
	</style>
</head>
<body>
<header>
	<img src = "img/banner-1.jpg" style ="position : absolute; top : 0px; left : 0px;">
	<span style="position : absolute; left : 15px; top : 0px;"><a href="{{route('home.page')}}" class="back">&#8249;&#8249; Back home</a></span>
	<h1 class = "faq">Frequently Asked Questions</h1>
</header>

<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">Freelancer</a></li>
		<li><a href="#account">Account</a></li>
		<li><a href="#payments">Payments</a></li>
		<li><a href="#privacy">Other Questions</a></li>
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Freelancer</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">How do I start working?</a>
				<div class="cd-faq-content">
					<p>You have to create an account as a "freelancer"</p>
					<ol>
						<li>1. Go back to the <a href="{{route('home.page')}}">homepage.</a></li>
						<li>2. Click on the upper right corner "sign up".</li>
						<li>3. Fill in your details and check "freelancer".</li>
					</ol>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I look for jobs?</a>
				<div class="cd-faq-content">
					<p>
						You may check the <a href="{{route('browse.jobs')}}">project corner</a>. Many jobs will be posted there and it is up to you to bid on your likings.
					</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">What is bidding?</a>
				<div class="cd-faq-content">
					<p>
						Bidding is the act of putting an offer on the jobs available. A reasonable offer is based on:
					</p>
					<ol>
						<li>1. The price must be lower than the maximum budget of the employer.</li>
						<li>2. You have adequate skills to work on the project. It is in your own hands to persuade why you are the best bidder out of all the other freelancers.</li>
						<li>3. Yor working time is before the deadline of the project.</li>
					</ol>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How to put in a bid?</a>
				<div class="cd-faq-content">
					<p>
						View a project and there will be a "bid now" button. You must be logged in!
					</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How to remove a bid?</a>
				<div class="cd-faq-content">
					<p>
						Go to the project and click "cancel bid". You can cancel your bid as long as the project is still in an "active" state.
					</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do reviews work?</a>
				<div class="cd-faq-content">
					<p>
						Each time you finish a project, you will be given a review and rating from your employer. A review is a detailed comment explaining how well you did the job.
						Rating is based on stars, from a range of 1 to 5.</p>
						<p>5 stars being the highest (it means you have done an excellent job) and 1 star the lowest (it means your work quality is poor).
							Each 7 days there will be a "top users" award where it will be accumulated based on top reviews.
						</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">How much does hireITS fee cost for freelancer?</a>
				<div class="cd-faq-content">
					<p>Register and other activites in hireITS is <span style ="font-weight:bold">free</span>. You don't have to pay anything when you use this website</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">How do I get paid?</a>
				<div class="cd-faq-content">
					<p>
						HireITS uses PayPal for its payment gateway. PayPal is the safest and a trustworthy system for online payments. Please before you start on projects,
						make a PayPal account, and add your PayPal email to your account. You can do this going to your profile and click "edit profile".

						</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="account" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Account</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">How do I edit my profile?</a>
				<div class="cd-faq-content">
					<p>To edit your profile, follow these steps : </p>
					<ul>
						<li>1. Login into your hireITS account</li>
						<li>2. Click on the MyAccount Tab</li>
						<li>3. Select profile</li>
						<li>4. Click Edit Profile</li>
						<li>5. Change your profile data</li>
						<li>6. Click Save Update</li>
						<li>7. Finish!</li>
					</ul>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I add a Portfolio to my Profile?</a>
				<div class="cd-faq-content">
					<p>To add a portfolio to your profile, first you must go to your profile. After that, click on Portfolio tab, then add your portfolio by clicking <span style="font-weight : bold">Add new Portfolio</span>'s button</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Can I change my username?</a>
				<div class="cd-faq-content">
					<p>No! Your username is <span style="font-weight:bold">permanent</span> and <span style="font-weight:bold">cannot be changed.</span></p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="payments" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Payments</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">When do I get paid?</a>
				<div class="cd-faq-content">
					<p>You wil get paid when you finish a project. You will get your payment from your employer via PayPal</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">What payment methods are accepted?</a>
				<div class="cd-faq-content">
					<p>hireITS <span style="font-weight:bold">only use</span> PayPal as its payment gateway.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">What currency is accepted for payment??</a>
				<div class="cd-faq-content">
					<p>You can be paid in the following currencies: USD, AUD, CAD, EUR, GBP, CNY, HKD, INR, JMD, CLP, JPY, SEK, MYR, IDR, MXN, NZD, PHP, PLN, SGD, BRL, VND, ARS, and ZAR. </p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Why did my credit card or PayPal payment fail?</a>
				<div class="cd-faq-content">
					<p>If you've tried to link your credit or debit card to your PayPal account, but received an error message, it may be because:</p>
					<ol>
						<li>1. The billing address you've entered for your PayPal account is different than the one on your card statement.</li>
						<li>2. A card can only be linked to one PayPal account at a time.</li>
						<li>3. You linked your card to your PayPal account, but entered the card security code (CSC) incorrectly 3 times.</li>
					</ol>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="faq/js/jquery-2.1.1.js"></script>
<script src="faq/js/jquery.mobile.custom.min.js"></script>
<script src="faq/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
