    @extends('frontend.layout.app')

    @section('title')
   Privacy | EPS
    @endsection


    @section('maincontent')

	<!-- // Start Code From Here -->


	<!-- page header start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 front_banner">
				<h1 class="frt">PRIVACY POLICY</h1>
				<h5>Our <span>Policy</span> </h5>
				<p><a href="{{ url('/') }}">Home </a> / privacy policy</span>
			</div>
		</div>
	</div>
	<!-- page header END -->

	<section>

		<div class="container" style="text-align: justify">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 privacy row ">
					<h3>Privacy Policy:</h3>
					<p>Easy Payment System (EPS-EASY PAYMENT SYSTEM) respects the privacy of its customers and partners
						services. This Privacy Policy describes, Our policies and procedures on the collection, use and
						disclosure of Your information when You use the Service and tells You about Your privacy rights
						and how the law protects You.
					</p>
					<h4>SUMMARY:</h4>
					<p>This Agreement applies to any use of our website, mobile application, electronic communications
						or services (the “Platform). The Platform may request you to provide your personal information
						in details, including your National ID/ Passport Number, Tax Identification Number (TIN), and/or
						bank account details, as required for operating the Platform.
					</p>
					<p>EPS-EASY PAYMENT SYSTEM shall not rent or sell your information to third parties for their
						marketing purposes without your unambiguous consent. In case, for rendering your service
						request, we need to convey your information to any third party, we shall share the required
						information under strict restriction following this Agreement. If you use third party website to
						access the Platform, you shall be responsible for reviewing the privacy policy statements of
						those websites. EPS-EASY PAYMENT SYSTEM shall not be responsible for the privacy practice of any
						third parties.
					</p>
					<p>BY USING THIS WEBSITE OR ANY EPS-EASY PAYMENT SYSTEM OPERATED SOLUTION OR APPLICATION OR
						SUBMITTING PERSONAL INFORMATION TO EPS-EASY PAYMENT SYSTEM THROUGH THIS WEBSITE OR ANY EPS-EASY
						PAYMENT SYSTEM POWERED APPLICATION, YOU ARE CONSENTING TO THE COLLECTION, USE, TRANSFER, AND
						DISCLOSURE OF INFORMATION AS DESCRIBED IN THIS PRIVACY STATEMENT. IF YOU DO NOT AGREE TO ABIDE
						BY THIS PRIVACY STATEMENT, DO NOT USE THIS WEBSITE, APPLICATION. YOU’RE CONTINUED USE OF THE
						WEBSITE, APPLICATION FOLLOWING THE POSTING OF ANY CHANGES TO THIS STATEMENT CONSTITUTES
						ACCEPTANCE OF SUCH CHANGES.
					</p>



					<h3>COLLECTING AND USING YOUR PERSONAL DATA</h3>
					<hr style="margin: 10px 15px;">
					<span>Types of Data Collected :</span>
					<h4 style="margin-top: 20px;">Personal Data</h4>
					<p>While using Our Service or Primarily sign up in to our account, We may ask You to provide Us with
						certain personally identifiable information that can be used to contact or identify You.
						Personally identifiable information may include, but is not limited to:</p>

					<ul>
						<li>Email address</li>
						<li>First name and last name</li>
						<li>Phone number</li>
						<li>Address, Postal code, City</li>
					</ul>

					<p>Upon successful log in to EPS-EASY PAYMENT SYSTEM account, You are as a EPS-EASY PAYMENT SYSTEM
						user need to enter Your credential information, which may include, but is not limited to</p>

					<ul>
						<li>Bank Information</li>
						<li>National Identification Number along with the still picture of it</li>
						<li> Picture</li>
						<li> Tax Identification Number</li>

					</ul>

					<p>In case of Company, additional documents may require to produce as per the wanting of the Bank
						for making the transaction.</p>


					<h4>USAGE DATA</h4>
					<p> Usage Data is collected automatically when using the Service.</p>

					<p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP
						address), browser type, browser version, the pages of our Service that You visit, the time and
						date of Your visit, the time spent on those pages, unique device identifiers and other
						diagnostic data.
					</p>
					<p>When You access the Service by or through a mobile device, We may collect certain information
						automatically, including, but not limited to, the type of mobile device You use, Your mobile
						device unique ID, the IP address of Your mobile device, Your mobile operating system, the type
						of mobile Internet browser You use, unique device identifiers, geo-location information,
						computer and connection information, statistics on page views, traffic to and from the sites, ad
						data, IP address, information collected by cookies, other tracking technologies, standard web
						log information and other identifying information about the computer or device that you use to
						access your EPS-EASY PAYMENT SYSTEM account shall be tracked for helping us detect possible
						instances of unauthorized transactions and shall be used by EPS-EASY PAYMENT SYSTEM to provide
						smooth experience of EPS-EASY PAYMENT SYSTEM services.
					</p>
					<p></p>


					<h4>TRACKING TECHNOLOGIES AND COOKIES</h4>
					<p>We use Cookies and similar tracking technologies to track the activity on Our Service and store
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
						</li>
					</ul>


				</div>
				<div class="col-md-1"></div>
			</div>



	</section>







	<!-- // Start Social Icon -->

	@include('frontend.layout.social')


	<!-- // End Social Icon -->



@endsection
