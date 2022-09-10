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
			 <img  class="single_img" src="{{ URL::to('') }}/frontend/img/team/single_image/Mohammad-Mohsin.png" alt="">
			<div class="sing_text">
				<h4>Mr. Mohammad Mohsin</h4>
				<span>chairman</span>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 sin_des">
			<p class="full_des">Mr. Mohammad Mohsin is a successful businessman. He is the chairman of Optimum Solution and Services Limited, an innovative Fintech solution. Mr. Mohsin has been providing an immense contribution to the Garments and Manufacturing industry for more than 20 years. He also holds years of experience doing business in the most competitive industries like trading, security service providers, and IT-enabled services.</p>

			<ol>
                <li>•	Chairman – Optimum Solution and Services Ltd.</li>
                <li>•	Chairman – Romo Fashion Today Ltd.</li>
                <li>•	Chairman - Romo Food and Beverage Ltd</li>
                <li>•	Chairman – Romo International.</li>
                <li>•	Managing Partner – Romo Corporation.</li>
                <li>•	Chairman – S4 Global Security.</li>
                <li>•	Chairman – Beacontech Limited.</li>
            </ol>

            <p class="full_des">Mr. Mohammad Mohsin completed his post-graduation in Business Studies from Islamic University, Kustia in 1992.</p>

		</div>
		</div>


		<div class="col-md-3"></div>
	</div>
</div>


<!-- // Start Social Icon -->

@include('frontend.layout.social')

<!-- // End Social Icon -->


 @endsection


