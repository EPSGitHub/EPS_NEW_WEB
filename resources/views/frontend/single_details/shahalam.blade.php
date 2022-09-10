@extends('frontend.layout.app')

@section('title')
single-details | EPS
@endsection


@section('maincontent')

<!-- // Start Code From Here -->

<section id="">
	<div class="container ">
		<div class="row">

			<div class="col-md-12  front_banner  ">
				<h1>Details View of </h1>
				<h5>Team<span> Member</span> </h5>
			</div>

		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_img">
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/MdShahAlamn.jpg" alt="">
			<div class="sing_text">
				<h4>Md. Shah Alam</h4>
				<span>Managing Director</span>
				<p>Optimum Solution & Services Ltd.</p>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">One of the most enthusiastic, dedicated visionaries of OSSL, Md. Shah Alam holds over 15 years of expertise in the fields of information technology, software, automation, networking and mobile telecommunications, and project management. </p>
			<p class="full_des">Md. Shah Alam earned his bachelor's degree in electrical engineering from the Islamic University of Technology (IUT) in Dhaka, Bangladesh, and his master's degree in communication and information technology from the University of Bremen in Bremen, Germany. </p>
			<p class="full_des">He has worked for a number of global corporations, including Orascom Telecom (Banglalink), Motorola, NCell, ONS Inc, and others. Bangladesh, Nepal, Indonesia, Myanmar, and Turkey are among the nations where he has worked. He worked for ONS Inc. as a Regional Head in the Asia-Pacific region and as the Country Manager of the ONS Bangladesh Branch Office.</p>

		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


