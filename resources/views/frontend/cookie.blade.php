
   @extends('frontend.layout.app')

   @section('title')
   Cookie | EPS
   @endsection


   @section('maincontent')

	<!-- // Start Code From Here -->

	<!-- front Banner Start  -->

	<div class="container">
		<div class="row">
			<div class="col-md-12 front_banner">
				<h1 class="frt">COOKIE POLICY OF EPS</h1>
				<h5>Use of <span>Cookies</span> </h5>
				<p><a href="{{ url('/') }}">Home </a>/ Cookie policy</span>
			</div>
		</div>
	</div>


	<!-- front Banner End -->



	<section id="cookie">

		<div class="container" style="text-align: justify">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<h4>COOKIE POLICY</h4>
					<p>This page explains how EPS (Easy Payment System) (referred to in this document as “EPS”, “we”, or
						“our”) uses cookies and similar technologies on our website and Application. It lists cookies
						that are or may be set in your web browser when visiting the website, why we use these cookies,
						and your rights and options in controlling the use of the cookies.
					</p>

					<h4>WHAT ARE COOKIES?</h4>

					<p>Cookies are small snippets of text that are placed on your device when you visit a website.
						Cookies are widely used by websites around the world in order to make their websites work, or to
						work more efficiently, or to report on the success of advertising initiatives, or to serve ads
						that users may actually be interested in. </p>
					<p>Cookies set by the website owner (in this case, EPS) are called “first party”. Cookies set by
						parties other than the website owner are “third party cookies”. Third party cookies enable third
						party features or functionality to be provided on or through the website – for example, if you
						click a paid advertisement served by Google, a Google cookie may help us determine the
						effectiveness of said advertisement.
					</p>


					<h4>WHY DOES EPS USE COOKIES?</h4>
					<p>Some cookies are required for technical reasons in order for the website to operate; we refer to
						these as “strictly necessary” cookies. For example, if you opt out of a certain category of
						cookie, we need to remember that preference, with a cookie. Other cookies may be considered
						“functional”, such as those that power our website chat feature.</p>

					<h4>COOKIES</h4>
					<p style="margin-bottom:20px">
						We use Cookies and similar tracking technologies to track the activity on Our Service and store
						certain information. Tracking technologies used are beacons, tags, and scripts to collect and
						track information and to improve and analyze Our Service. The technologies We use may include:
					</p>

					<ul>
						<li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device.
							You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being
							sent. However, if You do not accept Cookies, You may not be able to use some parts of our
							Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our
							Service may use Cookies.
						</li>
						<li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain
							small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and
							single-pixel gifs) that permit the Company, for example, to count users who have visited
							those pages or opened an email and for other related website statistics (for example,
							recording the popularity of a certain section and verifying system and server integrity).
							<br><br>

							Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal
							computer or mobile device when You go offline, while Session Cookies are deleted as soon as
							You close Your web browser.
							<br><br>
							We use both Session and Persistent Cookies for the purposes set out below:
							<br><br>


						</li>

						<li><strong>Necessary / Essential Cookies</strong>

							<br>
							Type: Session Cookies<br>
							Purpose: These Cookies are essential to provide You with services available through the
							Website and to enable You to use some of its features. They help to authenticate users and
							prevent fraudulent use of user accounts. Without these Cookies, the services that You have
							asked for cannot be provided, and We only use these Cookies to provide You with those
							services.



						</li>
						<li><strong>Cookies Policy / Notice Acceptance Cookies</strong>
							<br>
							Type: Persistent Cookies<br>
							Purpose: These Cookies identify if users have accepted the use of cookies on the Website.

						</li>

						<li><strong>Functionality Cookies</strong>
							<br>
							Type: Persistent Cookies<br>
							Purpose: These Cookies allow us to remember choices You make when You use the Website, such
							as remembering your login details or language preference. The purpose of these Cookies is to
							provide You with a more personal experience and to avoid You having to re-enter your
							preferences every time You use the Website.


						</li>

						<li><strong>Tracking and Performance Cookies</strong>
							<br>
							Type: Persistent Cookies<br>
							Purpose: These Cookies are used to track information about traffic to the Website and how
							users use the Website. The information gathered via these Cookies may directly or indirectly
							identify you as an individual visitor. This is because the information collected is
							typically linked to a pseudonymous identifier associated with the device you use to access
							the Website. We may also use these Cookies to test new pages, features or new functionality
							of the Website to see how our users react to them. Moreover, these cookies are used to make
							advertising messages more relevant to you. They perform functions like preventing the same
							ad from continuously reappearing, ensuring that ads are properly delivered and, in some
							cases, featuring ads based on your interests.


						</li>

					</ul>

					<h4>HOW TO DELETE COOKIES?</h4>
					<p>If you want to restrict or block the cookies that are set by our website, you can do so through
						your browser setting. Alternatively, you can visit www.internetcookies.org, which contains
						comprehensive information on how to do this on a wide variety of browsers and devices. You will
						find general information about cookies and details on how to delete cookies from your device.
					</p>


					<h4>MODIFYING YOUR COOKIE PREFERENCES</h4>
					<p> When you visit eps.com.bd, and we cannot determine previously set cookie preferences, we will
						present a cookie opt-in or opt-out banner at the lower left portion of the browser window or
						application. You may also modify your cookie preferences by clicking here.</p>


					<h4>CONTACT US</h4>
					<p>If you have any questions about our use of cookies or our privacy practices, you
						can find the most up-to-date contact information in our Privacy Statement located here.
					</p>


				</div>
				<div class="col-md-1"></div>
			</div>
		</div>


	</section>
















	<!-- // Start Social Icon -->

	@include('frontend.layout.social')


	<!-- // End Social Icon -->


@endsection
