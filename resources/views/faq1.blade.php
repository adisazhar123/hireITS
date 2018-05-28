@section('title')
  FAQ
@endsection

@section('style')
<style>
	.big-container{
		height : 100%;
		padding-bottom : 70px;
	}

	.header-style{
    padding-top: 120px;
    justify-content: center;
    text-align: center;
		color : white;
		text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
             0px 8px 13px rgba(0,0,0,0.1),
             0px 18px 23px rgba(0,0,0,0.1);
	}
	.body-container{
		width : 1366px;
		height : 700px;
	}
	.tab-container{
		border-radius : 10px;
		background-color : #88cdfa;
    margin-bottom: 20px;
  }

	.tabs{
		width : 100%;
		height : 50px;
		font-size : 18px;
		text-align : center;
		padding-top : 10px;
		padding-bottom : 5px;
		background-color : #0087e0;
	}

	.tabs:hover{
		background-color : #50a3d9;
		cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        border-bottom : 2px solid blue;
	}
	.tabs.active{
		background-color : #50a3d9;
		cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        border-bottom : 2px solid blue;
	}
	.faq-container{
		padding-bottom : 50px;
		float : left;
	}
	.faq-content{
		overflow :auto;
	}
	.button-faq{
		background-color: #777;
	    color: white;
	    cursor: pointer;
	    padding: 18px;
	    width: 100%;
	    border: none;
	    text-align: left;
	    outline: none;
	    font-size: 15px;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
	}
	.active, .button-faq:hover {
    	background-color: #555;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
	}
	.content{
		padding: 5px 18px;
	  max-height: 0;
	  overflow: hidden;
	  transition: max-height 0.2s ease-out;
    background-color: #f9f9f9;
	}
	.button-faq:after{
		content: '\002B';
	    color: white;
	    font-weight: bold;
	    float: right;
	    margin-left: 5px;
	}
	.button-faq.active:after {
    content: "\2212";
	}

  .bg{
    background-image: url({{asset("img/banner-1.jpg")}});
    background-repeat: no-repeat;
    background-size: 100% 290px;
    background-position: top;
    min-height: 300px;
  }

</style>
@endsection

@extends('layouts.app')

@section('content')
  <div class="bg">
    <h1 class = "header-style">Frequently Asked Questions</h1>
  </div>

	<div class = "container">
      <div class="row">
        <div class="col-lg-3">
          <div class = "tab-container">
            <div class = "tabs" style="border-top-left-radius : 10px;border-top-right-radius : 10px;" onclick="openTab(event, 'freelancer')" id="defaultOpen">Freelancer</div>
            <div class = "tabs" onclick="openTab(event, 'employer')">Employer</div>
            <div class = "tabs" onclick="openTab(event, 'account')">Account</div>
            <div class = "tabs" style="border-bottom-left-radius : 10px;border-bottom-right-radius : 10px;" onclick="openTab(event, 'payment')">Payment</div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class = "faq-container">
    				<div class = "faq-content" id="freelancer">
    					<div class = "button-faq">How do I start working?</div>
    					<div class = "content">
    						You have to create an account as a "freelancer"
    						<ol>
    							<li>Go back to the <a href="{{route('home.page')}}">homepage.</a></li>
    							<li>Click on the upper right corner "sign up".</li>
    							<li>Fill in your details and check "freelancer".</li>
    						</ol>
    					</div>
    					<div class = "button-faq">How do I look for jobs?</div>
    					<div class = "content">
    						You may check the <a href="{{route('browse.jobs')}}">project corner</a>. Many jobs will be posted there and it is up to you to bid on your likings.
    					</div>
    					<div class = "button-faq">What is bidding?</div>
    					<div class = "content">
    						Bidding is the act of putting an offer on the jobs available. A reasonable offer is based on:
    						<ol>
    							<li>The price must be lower than the maximum budget of the employer.</li>
    							<li>You have adequate skills to work on the project. It is in your own hands to persuade why you are the best bidder out of all the other freelancers.</li>
    							<li>Yor working time is before the deadline of the project.</li>
    						</ol>
    					</div>
    					<div class = "button-faq">How to put in a bid?</div>
    					<div class = "content">
    						View a project and there will be a "bid now" button. You must be logged in!
    					</div>
    					<div class = "button-faq">How to remove a bid?</div>
    					<div class = "content">
    						Go to the project and click "cancel bid". You can cancel your bid as long as the project is still in an "active" state.
    					</div>
    					<div class = "button-faq">How do reviews work?</div>
    					<div class = "content">
    						Each time you finish a project, you will be given a review and rating from your employer. A review is a detailed comment explaining how well you did the job.
    						Rating is based on stars, from a range of 1 to 5.<br /><br />
    						5 stars being the highest (it means you have done an excellent job) and 1 star the lowest (it means your work quality is poor).<br /><br />
    						Each 7 days there will be a "top users" award where it will be accumulated based on top reviews.

    					</div>
    					<div class = "button-faq">How much hireITS fee cost for new freelancers?</div>
    					<div class = "content">
    						Register and other activites in hireITS is <span style ="font-weight:bold">free</span>. You don't have to pay anything when you use this website
    					</div>
    					<div class = "button-faq">How do I get paid?</div>
    					<div class = "content">
    						HireITS uses PayPal for its payment gateway. PayPal is the safest and a trustworthy system for online payments. Please before you start on projects,
    						make a PayPal account, and add your PayPal email to your account. You can do this going to your profile and click "edit profile".
    					</div>
    				</div>
    				<div class = "faq-content" id="employer">
    					<div class = "button-faq">How does Freelancer work for employers?</div>
    					<div class = "content">
    						Freelancer provides a convenient and safe environment for service buyers (employers) and skilled workers (freelancers) around the world to conduct business. You can use the site to look for professional freelancers who can deliver the work you require, whether it be a short-term or long-term project. To know more, <a href="{{route('browse.showcase')}}">click here</a>.
    					</div>
    					<div class = "button-faq">What fees will I pay?</div>
    					<div class = "content">
    						Posting a project on the site is <span style="font-weight:bold">free</span>!
    					</div>
    					<div class = "button-faq">How do I post a project?</div>
    					<div class = "content">
    						To post a project, hover over <span style="font-weight:bold">Hire Freelancers</span> and select <span style="font-weight:bold">Post a Project</span>. For your convenience, you can just <a href="{{route('post.project.page')}}">click this link.</a>
    					</div>
    					<div class = "button-faq">How do I hire a freelancer directly from my project?</div>
    					<div class = "content">
    						Hire a freelancer in 3 easy steps:
    						<ol>
    							<li>Hover over My profile and go to your Dashboard</li>
    							<li>On My Projects tab, and select the project you want to see its details</li>
    							<li>On Freelancers bidding section, click Hire Me and complete a short form to offer the selected freelancer your project.</li>
    						</ol>
    					</div>
    				</div>
    				<div class = "faq-content" id="account">
    					<div class = "button-faq">How do I edit my profile?</div>
    					<div class = "content">
    						To edit your profile, follow these steps :
    						<ol>
    							<li>Login into your hireITS account</li>
    							<li>Click on the MyAccount Tab</li>
    							<li>Select profile</li>
    							<li>Click Edit Profile</li>
    							<li>Change your profile data</li>
    							<li>Click Save Update</li>
    							<li>Finish!</li>
    						</ol>
    					</div>
    					<div class = "button-faq">How to add a portfolio to my profile?</div>
    					<div class = "content">
    						To add a portfolio to your profile, first you must go to your profile. After that, click on Portfolio tab, then add your portfolio by clicking <span style="font-weight : bold">Add new Portfolio</span>'s button
    					</div>
    					<div class = "button-faq">Can I change my username?</div>
    					<div class = "content">
    						No! Your username is <span style="font-weight:bold">permanent</span> and <span style="font-weight:bold">cannot be changed.</span>
    					</div>
    				</div>

    				<div class = "faq-content" id="payment">
    					<div class = "button-faq">When do I get paid?</div>
    					<div class = "content">
    						You wil get paid when you finish a project. You will get your payment from your employer via PayPal
    					</div>
    					<div class = "button-faq">What payment methods are accepted?</div>
    					<div class = "content">
    						hireITS <span style="font-weight:bold">only use</span> PayPal as its payment gateway.
    					</div>
    					<div class = "button-faq">What currencies are accepted for payment?</div>
    					<div class = "content">
    						You can be paid in the following currencies: USD, AUD, CAD, EUR, GBP, CNY, HKD, INR, JMD, CLP, JPY, SEK, MYR, IDR, MXN, NZD, PHP, PLN, SGD, BRL, VND, ARS, and ZAR.
    					</div>
    					<div class = "button-faq">Why did my credit card or PayPal Payment fail?</div>
    					<div class = "content">
    						If you've tried to link your credit or debit card to your PayPal account, but received an error message, it may be because:
    						<ol>
    							<li>The billing address you've entered for your PayPal account is different than the one on your card statement.</li>
    							<li>A card can only be linked to one PayPal account at a time.</li>
    							<li>You linked your card to your PayPal account, but entered the card security code (CSC) incorrectly 3 times.</li>
    						</ol>
    					</div>
    				</div>
    			</div>
        </div>
      </div>
	</div>
@endsection

@section('script')
	<script>
		function openTab(evt, cityName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("faq-content");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tabs");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		evt.currentTarget.className += " active";
	</script>

	<script>
		var coll = document.getElementsByClassName("button-faq");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var content = this.nextElementSibling;
		    if (content.style.maxHeight){
		      content.style.maxHeight = null;
		    } else {
		      content.style.maxHeight = content.scrollHeight + "px";
		    }
		  });
		}
	</script>

@endsection
